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
        $this->call(UserTableSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(DoctorCategoriesSeeder::class);
        $this->call(EmployeCategorieSeeder::class);
        $this->call(EmployeSeeder::class);

    }
}
