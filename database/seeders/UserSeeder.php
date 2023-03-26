<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Abdul Wahab',
            'email' => 'abdul@gmail.com',    
            'password' => Hash::make('abdul!@#123'),
            'password2' => 'abdul!@#123',
            'address' => 'Sambrial',
            'phone' => '0300XXXXXXX',
            'type' => 'Admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Junaid',
            'email' => 'junaid@gmail.com',    
            'password' => Hash::make('junaid!@#123'),
            'password2' => 'junaid!@#123',
            'address' => 'Sambrial',
            'phone' => '0300XXXXXXX',
            'type' => 'Admin',
        ]);
    }
}
