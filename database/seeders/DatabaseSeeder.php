<?php

namespace Database\Seeders;

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
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(LocalitySeeder::class);
        // $this->call(DoctorSeeder::class);
        $this->call(ServiceSeeder::class);
        // $this->call(ReviewSeeder::class);
    }
}
