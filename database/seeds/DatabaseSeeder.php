<?php

use Illuminate\Database\UserSeeder;
use Illuminate\Database\DepartmentSeeder;
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
         $this->call(UserSeeder::class);
         $this->call(DepartmentSeeder::class);
    }
}
