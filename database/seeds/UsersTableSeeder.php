<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (User::count() == 0) {

            $user = User::create([
                'name' => 'super admin',
                'email' => 'superadmin@example.com',
                'password' => bcrypt('123456'),
                'remember_token' => str_random(60),
                'verified' => 1
            ]);
            $user->assignRole('super admin');


            $user = User::create([
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('123456'),
                'remember_token' => str_random(60),
                'verified' => 1

            ]);
            $user->assignRole('admin');

            $user = User::create([
                'name' => 'firm',
                'email' => 'firm@example.com',
                'password' => bcrypt('123456'),
                'remember_token' => str_random(60),
                'verified' => 1

            ]);
            $user->assignRole('firm');

            $user = User::create([
                'name' => 'firm',
                'email' => 'aviact96@example.com',
                'password' => bcrypt('12345678'),
                'remember_token' => str_random(60),
                'verified' => 1

            ]);
            $user->assignRole('firm');
            DB::table('firms')->insert(['user_id'=> $user->id]);


        }
    }
}
