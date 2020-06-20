<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Shafi Hossain',
            'slug' => 'shafi-hossain',
            'email' => 'shafihossain@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026076',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/1.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Shafi Hossain',
            'slug' => 'shafi-hossain',
            'email' => 'shafihossain9@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026076',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/2.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Shafi Hossain',
            'slug' => 'shafi-hossain',
            'email' => 'shafihossain8@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026076',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/3.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Shafi Hossain',
            'slug' => 'shafi-hossain',
            'email' => 'shafihossain7@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026076',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/4.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Shafi Hossain',
            'slug' => 'shafi-hossain',
            'email' => 'shafihossain6@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026076',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/7.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Shafi Hossain',
            'slug' => 'shafi-hossain',
            'email' => 'shafihossain5@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026076',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/6.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Shafi Hossain',
            'slug' => 'shafi-hossain',
            'email' => 'shafihossain4@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026076',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/7.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Shafi Hossain',
            'slug' => 'shafi-hossain',
            'email' => 'shafihossain3@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026076',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/6.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Shafi Hossain',
            'slug' => 'shafi-hossain',
            'email' => 'shafihossain2@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026076',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/4.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Shafi Hossain',
            'slug' => 'shafi-hossain',
            'email' => 'shafihossain1@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026076',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/1.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Onik Debnath',
            'slug' => 'onik-debnath',
            'email' => 'onikdebnath@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026069',
            'address' => 'East Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/8.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Onmoy Debnath',
            'slug' => 'onmoy-debnath',
            'email' => 'onmoydebnath@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026070',
            'address' => 'West Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/7.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Tonmoy Debnath',
            'slug' => 'tonmoy-debnath',
            'email' => 'tonmoydebnath@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026071',
            'address' => 'North Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/6.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Antor Debnath',
            'slug' => 'antor-debnath',
            'email' => 'onmoydebnath@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026072',
            'address' => 'South Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/2.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Abir Hossain',
            'slug' => 'abir-hossain',
            'email' => 'abirhossain@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026073',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/4.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Jubaer Hossain',
            'slug' => 'jubaer-hossain',
            'email' => 'jubaerhossain@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026074',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/3.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Iqbal Hossain',
            'slug' => 'iqbal-hossain',
            'email' => 'iqbalhossain@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026077',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/2.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Arif Hossain',
            'slug' => 'arif-hossain',
            'email' => 'arifhossain@gmail.com',
            'password' => Hash::make('11111111'), // secret
            'phone' => '01770026075',
            'address' => 'Rayer Bazar, 15 no, Dhanmondi, Dhaka, Bangladesh',
            'image' => 'user/img/pixabay/user/1.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
