<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminsTableSeeder::class,
            RolesTableSeeder::class,
            AdminRoleTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            CategoriesTableSeeder::class,
            UsersTableSeeder::class,
            AdsTableSeeder::class,
            AdCategoryTableSeeder::class,
            RoleUserTableSeeder::class,
            CategoryUserTableSeeder::class,
            CountriesTableSeeder::class,
            DivisionsTableSeeder::class,
            DistrictsTableSeeder::class,
            AreasTableSeeder::class,
            ProfessionsTableSeeder::class,
            EducationsTableSeeder::class
        ]);

        /*factory(App\Models\User\User::class, 15)->create();*/
    }
}
