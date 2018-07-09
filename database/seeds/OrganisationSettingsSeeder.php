<?php

use Illuminate\Database\Seeder;

class OrganisationSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organisation_settings')->insert([
            'name' => 'Globis Hosting',
            'email' => 'aviact96@gmail.com',
            'phone' => 2047801370,
            'address' => 'Austria'
        ]);
    }
}


