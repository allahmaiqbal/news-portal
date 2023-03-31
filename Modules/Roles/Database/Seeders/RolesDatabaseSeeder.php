<?php

namespace Modules\Roles\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Users\Database\factories\UserFactory;
use Modules\Users\Entities\User;
use Spatie\Permission\Models\Role;

class RolesDatabaseSeeder extends Seeder
{
    const DEFAULT_RULES = [
        'administrator' => [
            'name' => 'Administrator',
            'is_permanent' => true,
        ],
        'manager' => [
            'name' => 'Manager',
            'is_permanent' => true,
        ],
        'operator' => [
            'name' => 'Operator',
            'is_permanent' => true,
        ],
    ];

    const ADMINISTRATOR_RULE_NAME = self::DEFAULT_RULES['administrator']['name'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::DEFAULT_RULES as $role) {
            Role::create($role);
        }

        // Assign administrator role to default account
        User::query()
            ->where('email', UserFactory::DEFAULT_USER_EMAIL)
            ->firstOrFail()
            ->assignRole(self::ADMINISTRATOR_RULE_NAME);
    }
}
