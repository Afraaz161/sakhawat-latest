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
            'name' => 'Moin Abbas',
            // 'u_name' => 'معین عباس',
            'email' => 'moin@gmail.com',    
            'password' => Hash::make('password'),
            'password2' => 'password',
            'address' => 'Lahore',
            'phone' => '03321773514',
            'type' => 'Admin',
        ]);
    }
}
