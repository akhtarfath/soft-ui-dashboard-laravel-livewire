<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;
use App\Models\Fakultas;
use App\Models\Settings;
use App\Models\OperatorUser;

class Setting extends Component
{
    public $modalToggle = false, $modalTitle = null, $modalRoute = '',
        $modalIcon = '', $pengumuman = '', $tanggalMulai = '', $tanggalSelesai = '', $settingId = null,
        $isSettingTanggal = false, $isEditAdmin = false, $adminId = null, $adminData = null,
        $isDeleteAdmin = false, $pilihAdmin = '', $pilihFakultas = '', $adminStatus = true,
        $ckEditor = '<script type="text/javascript">
        CKEDITOR.replace("pengumuman", {
            language: "id",
            removeButtons: [
                "Image",
                "About"
            ],
            height: "250px"
        });
    </script>';

    public function setModalToggle(
        $modalTitle = '',
        $modalRoute = '',
        $modalIcon = '',
        $isSettingTanggal = false,
        $settingId = null,
        $isEditAdmin = false,
        $adminId = null,
        $isDeleteAdmin = false
    ) {
        $this->modalTitle = $modalTitle;
        $this->modalRoute = $modalRoute;
        $this->modalIcon = $modalIcon;
        $this->isSettingTanggal = $isSettingTanggal;
        $this->settingId = $settingId;
        $this->isEditAdmin = $isEditAdmin;
        $this->adminId = $adminId;
        $this->isDeleteAdmin = $isDeleteAdmin;

        $this->adminData = User::find($this->adminId);
        $this->adminStatus = isset($this->adminData) ? ($this->adminData->status == 'active' ? true : false) : true;
        $this->pilihFakultas = isset($this->adminData) ? $this->adminData->fakultas_handle : '';

        $this->modalToggle = !$this->modalToggle;
    }

    public function render()
    {
        return view('livewire.pages.setting', [
            'settingItems' => Settings::all(),
            'adminUsers' => OperatorUser::whereNotIn('UNAME', User::where('role', 'admin')->get()->pluck('email')->toArray())
                ->where('KODEFAK', '!=', '--')->orderBy('NAMA', 'ASC')->get(),
            'fakultas' => Fakultas::where('KODEFAK', '!=', '--')->orderBy('NAMAFAK', 'ASC')->get(),
            'admins' => User::where('role', 'admin')->get()
        ]);
    }

    // annoucement and date crud
    public function storeSettingTanggal()
    {
        $this->validate([
            'pengumuman' => 'required',
            'tanggalMulai' => 'required',
            'tanggalSelesai' => 'required'
        ]);

        Setting::find($this->settingId)->update([
            'announcement' => $this->pengumuman,
            'start_date' => $this->tanggalMulai,
            'end_date' => $this->tanggalSelesai
        ]);

        $this->modalToggle = false;
    }

    // admin crud
    public function storeSettingAdmin()
    {
        $this->validate([
            'pilihAdmin' => 'required',
            'pilihFakultas' => 'required',
            'adminStatus' => 'required'
        ]);

        User::create([
            'name' => OperatorUser::where('UNAME', $this->pilihAdmin)->first()->NAMA,
            'email' => $this->pilihAdmin,
            'password' => NULL,
            'role' => 'admin',
            'fakultas_handle' => $this->pilihFakultas,
            'status' => $this->adminStatus ? 'active' : 'non-active'
        ]);

        $this->modalToggle = false;
    }

    public function updateSettingAdmin()
    {
        $this->validate([
            'pilihFakultas' => 'required',
            'adminStatus' => 'required'
        ]);

        User::find($this->adminId)->update([
            'fakultas_handle' => $this->pilihFakultas,
            'status' => $this->adminStatus ? 'active' : 'non-active'
        ]);

        $this->modalToggle = false;
    }

    public function deleteAdmin()
    {
        User::find($this->adminId)->delete();
        $this->modalToggle = false;
        return redirect()->intended('/auth/pengaturan')->with('toast_success', 'Berhasil menghapus admin!');
    }
}
