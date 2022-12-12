<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        auth()->logout();
        auth()->guard('mahasiswa')->logout();
        auth()->guard('dosen')->logout();

        return redirect('/login')->with('toast_success', 'Log Out.. Terima Kasih!');
    }

    public function render()
    {
        return view('livewire.auth.logout');
    }
}
