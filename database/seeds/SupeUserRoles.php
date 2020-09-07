<?php

use Illuminate\Database\Seeder;

class SupeUserRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'SuperAdministartor',
            'Administrator',
            'Manager',
            'Editor',
        ];

        foreach ($roles as $key => $role) {
            $num = (int)$key + 1;
            DB::table('super_user_roles')->insert([
                'id' => $num,
                'role_name' => $role,
            ]);
        }
    }
}
