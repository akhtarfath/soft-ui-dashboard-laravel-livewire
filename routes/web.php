<?php

use App\Http\Livewire\Rtl;

use App\Http\Livewire\Tables;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Auth\Login;

use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Pages\Setting;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Dashboard;
use App\Http\Livewire\Pages\BimbinganUAS;

use App\Http\Livewire\Pages\BimbinganUTS;
use App\Http\Livewire\Pages\PengisianKRS;
use App\Http\Livewire\Pages\BimbinganBebas;
use App\Http\Livewire\Pages\BimbinganReport;
use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', Login::class)->name('login');

Route::middleware('auth.basic')
    ->prefix('auth')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');

        // admin
        Route::get('/laporan-bimbingan', BimbinganReport::class)->name('laporan-bimbingan');
        Route::get('/pengaturan', Setting::class)->name('pengaturan');

        // mahasiswa dan dosen
        Route::get('/pengisian-krs', PengisianKRS::class)->name('pengisian-krs');
        Route::get('/bimbingan-uts', BimbinganUTS::class)->name('bimbingan-uts');
        Route::get('/bimbingan-uas', BimbinganUAS::class)->name('bimbingan-uas');
        Route::get('/bimbingan-bebas', BimbinganBebas::class)->name('bimbingan-bebas');

        // template
        Route::get('/billing', Billing::class)->name('billing');
        Route::get('/profile', Profile::class)->name('profile');
        Route::get('/tables', Tables::class)->name('tables');
        Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
        Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
        Route::get('/rtl', Rtl::class)->name('rtl');
        Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
        Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
    });
