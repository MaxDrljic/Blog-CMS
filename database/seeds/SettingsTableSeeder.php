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
            'address'           => 'Croatia, Zagreb',
            'contact_number'    => '+385 99 999 9999',
            'contact_email'     => 'info@laravel_blog.com'
        ]);
    }
}
