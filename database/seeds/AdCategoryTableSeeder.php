<?php

use Illuminate\Database\Seeder;

class AdCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category 1 with 5 ads
        DB::table('ad_category')->insert([
            'ad_id' => 1,
            'category_id' => 1,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 2,
            'category_id' => 1,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 3,
            'category_id' => 1,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 4,
            'category_id' => 1,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 5,
            'category_id' => 1,
        ]);

        //Category 2 with 5 ads
        DB::table('ad_category')->insert([
            'ad_id' => 1,
            'category_id' => 2,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 2,
            'category_id' => 2,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 3,
            'category_id' => 2,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 4,
            'category_id' => 2,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 5,
            'category_id' => 2,
        ]);

        //Category 3 with 5 ads
        DB::table('ad_category')->insert([
            'ad_id' => 1,
            'category_id' => 3,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 2,
            'category_id' => 3,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 3,
            'category_id' => 3,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 4,
            'category_id' => 3,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 5,
            'category_id' => 3,
        ]);

        //Category 4 with 5 ads
        DB::table('ad_category')->insert([
            'ad_id' => 6,
            'category_id' => 4,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 7,
            'category_id' => 4,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 8,
            'category_id' => 4,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 9,
            'category_id' => 4,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 10,
            'category_id' => 4,
        ]);

        //Category 5 with 5 ads
        DB::table('ad_category')->insert([
            'ad_id' => 6,
            'category_id' => 5,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 7,
            'category_id' => 5,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 8,
            'category_id' => 5,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 9,
            'category_id' => 5,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 10,
            'category_id' => 5,
        ]);

        //Category 6 with 5 ads
        DB::table('ad_category')->insert([
            'ad_id' => 6,
            'category_id' => 6,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 7,
            'category_id' => 6,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 8,
            'category_id' => 6,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 9,
            'category_id' => 6,
        ]);
        DB::table('ad_category')->insert([
            'ad_id' => 10,
            'category_id' => 6,
        ]);
    }
}
