<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Educational info of user 1
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 1
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 1
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 1
        ]);

        //Educational info of user 3
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 3
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 3
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 3
        ]);

        //Educational info of user 4
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 4
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 4
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 4
        ]);

        //Educational info of user 5
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 5
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 5
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 5
        ]);

        //Educational info of user 6
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 6
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 6
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 6
        ]);

        //Educational info of user 7
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 7
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 7
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 7
        ]);

        //Educational info of user 8
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 8
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 8
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 8
        ]);

        //Educational info of user 9
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 9
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 9
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 9
        ]);

        //Educational info of user 10
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 10
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 10
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 10
        ]);

        //Educational info of user 11
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 11
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 11
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 11
        ]);

        //Educational info of user 12
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 12
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 12
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 12
        ]);

        //Educational info of user 13
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 13
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 13
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 13
        ]);

        //Educational info of user 14
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 14
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 14
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 14
        ]);

        //Educational info of user 15
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 15
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 15
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 15
        ]);

        //Educational info of user 16
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 16
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 16
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 16
        ]);

        //Educational info of user 17
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 17
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 17
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 17
        ]);

        //Educational info of user 18
        DB::table('education')->insert([
            'degree_type' => 'SSC',
            'institution' => 'Susuty High School',
            'subject' => 'Science',
            'location' => 'Susuty, Fulbaria, Mymensingh, Bangladesh',
            'user_id' => 18
        ]);
        DB::table('education')->insert([
            'degree_type' => 'HSC',
            'institution' => 'Royal Media College',
            'subject' => 'Science',
            'location' => 'Mymensingh, Bangladesh',
            'user_id' => 18
        ]);
        DB::table('education')->insert([
            'degree_type' => 'BSC',
            'institution' => 'Daffodil International University',
            'subject' => 'SWE',
            'location' => 'Dhaka, Bangladesh',
            'user_id' => 18
        ]);
    }
}
