<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'), // password

        ])->assignRole('admin');


        $user = User::create([
            'name' => 'Usuario Uno',
            'email' => 'test1@test.com',
            'password' => Hash::make('123456789'), // password

        ])->assignRole('user');


        $user = User::create([
            'name' => 'Usuario Dos',
            'email' => 'test2@test.com',
            'password' => Hash::make('123456789'), // password

        ])->assignRole('user');


        $user = User::create([
            'name' => 'Usuario Tres',
            'email' => 'test3@test.com',
            'password' => Hash::make('123456789'), // password

        ])->assignRole('user');
        
    }
}
