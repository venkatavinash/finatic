<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'verified' => $faker->randomElement($array= array('1','0'))
    ];
});




$factory->define(App\Firm::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'title' => $faker->randomElement($array= array('Mr' , 'Ms', 'Company' )),
        'companyname' => $faker->company,
        'street' => $faker->streetAddress,
        'house_number' => $faker->postcode,
        'postcode' => $faker->randomNumber('5'),
        'place' => $faker->city,
        'email' => $faker->safeEmail,
        'phone' => $faker->e164PhoneNumber,
        'fax' => $faker->e164PhoneNumber,
        'mobile' => $faker->e164PhoneNumber,
        'web' => $faker->domainName,
        'country' => 'Österreich',
        'region' => $faker->randomElement($array= array('Wien', 'Niederösterreich', 'Salzburg', 'Burgenland', 'Oberösterreich', 'Steiermark', 'Vorarlberg', 'Kärnten', 'Tirol')),
        'social_security' => $faker->randomElement($array = array('keine Auswahl', 'SVA Geldleistung', 'SVA Sachleistung')) ,
        'ss_number' => $faker->ssn,
        'premium_account' => $faker->randomNumber('8'),
        'tax_number' => $faker->randomNumber('7') . $faker->randomElement($array = array ('!','@','&')),
        'uid_taxnumber' => $faker->randomNumber('7'). $faker->shuffle('hello'),
        'region_finance_office' => $faker->randomElement($array= array('Wien', 'Niederösterreich', 'Salzburg', 'Burgenland', 'Oberösterreich', 'Steiermark', 'Vorarlberg', 'Kärnten', 'Tirol')),
        'finance_office' => $faker->randomElement($array= array('Wien', 'Niederösterreich', 'Salzburg', 'Burgenland', 'Oberösterreich', 'Steiermark', 'Vorarlberg', 'Kärnten', 'Tirol')),
        'status' => $faker->randomElement($array = array('1','0')),
    ];
});

