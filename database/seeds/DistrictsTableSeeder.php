<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names =  [
            //Dhaka Division
            'Dhaka', 'Faridpur', 'Gazipur', 'Gopalganj', 'Kishoreganj', 'Madaripur', 'Manikganj', 'Munshiganj', 'Narayanganj', 'Narsingdi', 'Rajbari', 'Shariatpur', 'Tangail',
            //Mymensingh Division
            'Mymensingh', 'Jamalpur', 'Netrokona', 'Sherpur'
        ];
        $slugs =   [
            //Dhaka Division
            'dhaka', 'faridpur', 'gazipur', 'gopalganj', 'kishoreganj', 'madaripur', 'manikganj', 'munshiganj', 'narayanganj', 'narsingdi', 'rajbari', 'shariatpur', 'tangail',
            //Mymensingh Division
            'mymensingh', 'jamalpur', 'netrokona', 'sherpur'
        ];
        $division_ids =   [
            //Dhaka Division
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            //Mymensingh Division
            2, 2, 2, 2
        ];
        foreach($names as $index => $name) {
            DB::table('districts')->insert([
                'name' => $name,
                'slug'  => $slugs[$index],
                'division_id'  => $division_ids[$index]
            ]);
        }
    }
}
