<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Super Admin', 'Creator', 'Editor', 'Publisher', 'Expert', 'Client'];

        foreach($names as $name) {
            DB::table('roles')->insert([
                'name'   =>  $name
            ]);
        }
    }
}
