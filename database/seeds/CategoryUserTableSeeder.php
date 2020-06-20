<?php

use Illuminate\Database\Seeder;

class CategoryUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category 1 with 6 users
        DB::table('category_user')->insert([
            'user_id' => 1,
            'category_id' => 1,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 3,
            'category_id' => 1,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 4,
            'category_id' => 1,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 5,
            'category_id' => 1,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 18,
            'category_id' => 1,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 7,
            'category_id' => 1,
        ]);

        //Category 2 with 6 users
        DB::table('category_user')->insert([
            'user_id' => 8,
            'category_id' => 2,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 9,
            'category_id' => 2,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 10,
            'category_id' => 2,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 11,
            'category_id' => 2,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 12,
            'category_id' => 2,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 13,
            'category_id' => 2,
        ]);

        //Category 3 with 6 users
        DB::table('category_user')->insert([
            'user_id' => 14,
            'category_id' => 3,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 15,
            'category_id' => 3,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 16,
            'category_id' => 3,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 17,
            'category_id' => 3,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 18,
            'category_id' => 3,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 1,
            'category_id' => 3,
        ]);

        //Category 4 with 6 users
        DB::table('category_user')->insert([
            'user_id' => 2,
            'category_id' => 4,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 3,
            'category_id' => 4,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 4,
            'category_id' => 4,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 5,
            'category_id' => 4,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 7,
            'category_id' => 4,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 8,
            'category_id' => 4,
        ]);

        //Category 5 with 6 users
        DB::table('category_user')->insert([
            'user_id' => 9,
            'category_id' => 5,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 10,
            'category_id' => 5,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 11,
            'category_id' => 5,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 12,
            'category_id' => 5,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 13,
            'category_id' => 5,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 14,
            'category_id' => 5,
        ]);

        //Category 6 with 6 users
        DB::table('category_user')->insert([
            'user_id' => 15,
            'category_id' => 6,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 16,
            'category_id' => 6,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 17,
            'category_id' => 6,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 18,
            'category_id' => 6,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 1,
            'category_id' => 6,
        ]);
        DB::table('category_user')->insert([
            'user_id' => 2,
            'category_id' => 6,
        ]);

    }
}
