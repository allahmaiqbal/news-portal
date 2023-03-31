<?php

namespace Modules\Users\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Users\Database\factories\UserFactory;
use Modules\Users\Entities\User;

class UsersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // default user create
        if (! User::where('email', UserFactory::DEFAULT_USER_EMAIL)->exists()) {
            User::factory()->default()->create();
        }

        User::factory(10)->create();
    }
}
