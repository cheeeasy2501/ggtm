<?php

use Illuminate\Database\Seeder;

class SuperUserRolesSeeder extends Seeder
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
            DB::table('superusers_roles')->insert([
                'id' => $num,
                'name' => $role,
                'permissions' => 'test permiss'.$num
            ]);
        }
    }
}
