<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['email' => 'test@test.com'], [
            'name' => 'Digital',
            'phone' => '123564789',
            'address' => 'New Cairo',
        ]);
    }
}
