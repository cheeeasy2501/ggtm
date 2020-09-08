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
             UserSeeder::class,
             SuperUserRolesSeeder::class,
             SuperUserSeeder::class,


             CategorySeeder::class,
             NewsSeeder::class,
             CategoryNewsSeeder::class
         ]);
    }
}
