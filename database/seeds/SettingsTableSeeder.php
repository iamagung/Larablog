<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name'         => "Laravel's Blog",
            'contact_number'    => "081230585313",
            'contact_email'     => "agungdev730@gmail.com",
            'address'           => "Tambelangan, Sampang"
        ]);
    }
}
