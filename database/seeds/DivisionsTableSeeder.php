<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names =  [
            //Bangladesh
            'Dhaka', 'Mymensingh', 'Barishal', 'Chittagong', 'Khulna', 'Rajshahi', 'Rangpur', 'Sylhet',
            //India
            'Kolkata'
        ];
        $slugs =   [
            //Bangladesh
            'dhaka', 'mymensingh', 'barishal', 'chittagong', 'khulna', 'rajshahi', 'rangpur', 'sylhet',
            //India
            'kolkata'
        ];
        $country_ids = [
            //Bangladesh
            1, 1, 1, 1, 1, 1, 1, 1,
            //India
            2
        ];
        foreach($names as $index => $name) {
            DB::table('divisions')->insert([
                'name' => $name,
                'slug'  => $slugs[$index],
                'country_id'  => $country_ids[$index]
            ]);
        }
    }
}
