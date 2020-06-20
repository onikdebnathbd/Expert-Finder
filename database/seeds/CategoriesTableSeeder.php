<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Developer',
            'slug' => 'developer',
            'image' => 'user/img/pixabay/category/developer.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Tutor',
            'slug' => 'tutor',
            'image' => 'user/img/pixabay/category/tutor.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Designer',
            'slug' => 'designer',
            'image' => 'user/img/pixabay/category/designer.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Electrician',
            'slug' => 'electrician',
            'image' => 'user/img/pixabay/category/electrician.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Domestic Employee',
            'slug' => 'domestic-employee',
            'image' => 'user/img/pixabay/category/domestic-employee.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Doctor',
            'slug' => 'doctor',
            'image' => 'user/img/pixabay/category/doctor.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Blogger',
            'slug' => 'blogger',
            'image' => 'user/img/pixabay/category/blogger.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Marketer',
            'slug' => 'marketer',
            'image' => 'user/img/pixabay/category/marketer.jpg'
        ]);
    }
}
