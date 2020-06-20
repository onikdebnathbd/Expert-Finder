<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Onik Debnath',
            'email' => 'onikdebnath14@gmail.com',
            'password' => Hash::make('111111'), // secret
            'phone' => '01770026069',
            'status' => 1
        ]);
        DB::table('admins')->insert([
            'name' => 'Onmoy Debnath',
            'email' => 'onmoydebnath14@gmail.com',
            'password' => Hash::make('111111'), // secret
            'phone' => '01770026070',
            'status' => 1
        ]);
        DB::table('admins')->insert([
            'name' => 'Tonmoy Debnath',
            'email' => 'tonmoydebnath14@gmail.com',
            'password' => Hash::make('111111'), // secret
            'phone' => '01770026071',
            'status' => 1
        ]);
        DB::table('admins')->insert([
            'name' => 'Antor Debnath',
            'email' => 'antordebnath14@gmail.com',
            'password' => Hash::make('111111'), // secret
            'phone' => '01770026072',
            'status' => 1
        ]);
    }
}
