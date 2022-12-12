<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Superadmin',
            'email' => 'super@uhamka.ac.id',
            'password' => Hash::make('secret'),
            'role' => 'superadmin'
        ]);

        $settings = [
            [
                'setting_route' => 'pengisian-krs',
                'setting_icon' => 'fas fa-file-alt',
                'setting_text' => 'Pengisian KRS',
            ],
            [
                'setting_route' => 'bimbingan-uts',
                'setting_icon' => 'fas fa-paste',
                'setting_text' => 'Bimbingan UTS',
            ],
            [
                'setting_route' => 'bimbingan-uas',
                'setting_icon' => 'fas fa-clone',
                'setting_text' => 'Bimbingan UAS',
            ],
            [
                'setting_route' => 'bimbingan-bebas',
                'setting_icon' => 'fas fa-folder-open',
                'setting_text' => 'Bimbingan Bebas',
            ]
        ];

        foreach ($settings as $setting) {
            Settings::create($setting);
        }
    }
}
