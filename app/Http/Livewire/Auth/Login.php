<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Models\UserDosen;
use App\Models\UserMahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = '', $password = '', $remember_me = false;

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    public function mount()
    {
        if (
            Auth::user() ||
            Auth::guard('mahasiswa')->user() ||
            Auth::guard('dosen')->user()
        ) {
            redirect('/auth/dashboard');
        }
    }

    public function adminLogin()
    {
        $user = User::where(["email" => $this->email])->first();
        Auth::login($user, $this->remember_me);
        if (Auth::check()) {
            return redirect()->intended('/auth/dashboard')
                ->with('toast_success', 'Hi, ' . \ucwords(\strtolower(Auth::user()->name)));
        }
    }
    public function mahasiswaLogin()
    {
        $mhs = DB::connection('sqlsrv')->select(
            DB::raw("EXEC S_LOGINMHS_PA
                @nim = '" . $this->email . "',
                @pwd = '" . $this->password . "'")
        );

        if ($mhs[0]->er != 'false') {
            Auth::guard('mahasiswa')->loginUsingId($this->email, $this->remember_me);
            if (Auth::guard('mahasiswa')->check()) {
                return redirect()->intended('/auth/dashboard')
                    ->with('toast_success', 'Hi, ' . \ucwords(\strtolower(Auth::guard('mahasiswa')->user()->NAMA)));
            }
        }
    }

    public function dosenLogin()
    {
        $dos = DB::connection('sqlsrv')->select(
            DB::raw("EXEC S_LOGINDOSEN_PA
                @kodedosen = '" . $this->email . "',
                @pwd = '" . $this->password . "'")
        );

        if ($dos[0]->er != 'false') {
            Auth::guard('dosen')->loginUsingId($this->email, $this->remember_me);
            if (Auth::guard('dosen')->check()) {
                return redirect()->intended('/auth/dashboard')
                    ->with('toast_success', 'Hi, ' . \ucwords(\strtolower(Auth::guard('dosen')->user()->NAMADOSEN)));
            }
        }
    }

    public function login()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ], $this->remember_me)) $this->adminLogin();
        else {
            // MHS login && DOSEN login
            $this->mahasiswaLogin();
            $this->dosenLogin();

            // error login
            return $this->addError('email', 'Email atau password salah');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
