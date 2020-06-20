<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ads')->insert([
            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry 1.',
            'slug' => 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-1',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book 1.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ads')->insert([
            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry 2.',
            'slug' => 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-2',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book 2.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ads')->insert([
            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry 3.',
            'slug' => 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-3',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book 3.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ads')->insert([
            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry 4.',
            'slug' => 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-4',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book 4.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ads')->insert([
            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry 5.',
            'slug' => 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-5',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book 5.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ads')->insert([
            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry 6.',
            'slug' => 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-6',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book 6.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ads')->insert([
            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry 7.',
            'slug' => 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-7',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book 7.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ads')->insert([
            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry 8.',
            'slug' => 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-8',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book 8.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ads')->insert([
            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry 9.',
            'slug' => 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-9',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book 9.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ads')->insert([
            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry 10.',
            'slug' => 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-10',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book 10.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
