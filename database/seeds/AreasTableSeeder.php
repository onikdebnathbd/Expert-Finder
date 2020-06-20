<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names =  [
            //Dhaka District
            'Adabor', 'Uttar Khan', 'Uttara', 'Kadamtali', 'Kalabagan', 'Kafrul', 'Kamrangirchar', 'Cantonment', 'Kotwali', 'Khilkhet', 'Khilgaon', 'Gulshan', 'Gendaria', 'Chawkbazar Model', 'Demra', 'Turag', 'Tejgaon', 'Dakshinkhan', 'Darus Salam', 'Dhanmondi', 'New Market', 'Paltan', 'Pallabi', 'Bangshal', 'Badda', 'Bimanbandar', 'Motijheel', 'Mirpur', 'Mohammadpur', 'Jatrabari', 'Ramna', 'Rampura', 'Lalbagh', 'Shah Ali', 'Shahbagh', 'Sher-e-Bangla Nagar', 'Shyampur', 'Sabujbagh', 'Sutrapur', 'Hazaribagh', 'Keraniganj', 'Nawabganj', 'Dohar', 'Savar',
            //Mymensingh District
            'Mymensingh Sadar', 'Bhaluka', 'Trishal', 'Haluaghat', 'Muktagacha', 'Dhobaura', 'Fulbaria', 'Gaffargaon', 'Gauripur', 'Ishwarganj', 'Nandail', 'Phulpur', 'Tarakanda'
        ];
        $slugs =   [
            //Dhaka District
            'adabor', 'uttar-khan', 'uttara', 'kadamtali', 'kalabagan', 'kafrul', 'kamrangirchar', 'cantonment', 'kotwali', 'khilkhet', 'khilgaon', 'kulshan', 'gendaria', 'chawkbazar-model', 'demra', 'turag', 'tejgaon', 'dakshinkhan', 'darus-salam', 'dhanmondi', 'new-market', 'paltan', 'pallabi', 'bangshal', 'badda', 'bimanbandar', 'motijheel', 'mirpur', 'mohammadpur', 'jatrabari', 'ramna', 'rampura', 'lalbagh', 'shah-ali', 'shahbagh', 'sher-e-bangla-nagar', 'shyampur', 'sabujbagh', 'sutrapur', 'hazaribagh', 'keraniganj', 'nawabganj', 'dohar', 'savar',
            //Mymensingh District
            'Mymensingh Sadar', 'Bhaluka', 'Trishal', 'Haluaghat', 'Muktagacha', 'Dhobaura', 'Fulbaria', 'Gaffargaon', 'Gauripur', 'Ishwarganj', 'Nandail', 'Phulpur', 'Tarakanda'
        ];
        $district_ids =   [
            //Dhaka district
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            //Mymensingh District
            14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14
        ];
        foreach($names as $index => $name) {
            DB::table('areas')->insert([
                'name' => $name,
                'slug'  => $slugs[$index],
                'district_id'  => $district_ids[$index]
            ]);
        }
    }
}
