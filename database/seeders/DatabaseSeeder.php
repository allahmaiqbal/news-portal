<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Category\Database\Seeders\CategoryDatabaseSeeder;
use Modules\Roles\Database\Seeders\RolesDatabaseSeeder;
use Modules\Users\Database\Seeders\UsersDatabaseSeeder;

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
           UsersDatabaseSeeder::class,
           RolesDatabaseSeeder::class,
            CategoryDatabaseSeeder::class,
        ]);
    }
}
