<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['View Admin', 'Create Admin', 'Edit Admin', 'Delete Admin', 'View Role', 'Create Role', 'Edit Role', 'Delete Role', 'View Permission', 'Edit Permission', 'View Category', 'Create Category', 'Edit Category', 'Delete Category', 'Publish Category', 'View Country', 'Create Country', 'Edit Country', 'Delete Country', 'Publish Country', 'View Division', 'Create Division', 'Edit Division', 'Delete Division', 'Publish Division', 'View District', 'Create District', 'Edit District', 'Delete District', 'Publish District', 'View Area', 'Create Area', 'Edit Area', 'Delete Area', 'Publish Area', 'Professional Info', 'Educational Info', 'Ad Publication'];
        $fors = ['Admin', 'Admin', 'Admin', 'Admin', 'Role', 'Role', 'Role', 'Role', 'Permission', 'Permission', 'Category', 'Category', 'Category', 'Category', 'Category', 'Country', 'Country', 'Country', 'Country', 'Country', 'Division', 'Division', 'Division', 'Division', 'Division', 'District', 'District', 'District', 'District', 'District', 'Area', 'Area', 'Area', 'Area', 'Area', 'Profession', 'Education', 'Ad'];
        foreach($names as $index => $name) {
            DB::table('permissions')->insert([
                'name'   =>  $name,
                'for'   =>  $fors[$index]
            ]);
        }
    }
}
