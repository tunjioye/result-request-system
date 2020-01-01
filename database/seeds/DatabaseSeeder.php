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
            UsersTableSeeder::class,
            SchoolsTableSeeder::class,
            StudentsTableSeeder::class,
            ResultsTableSeeder::class,
            RequestersTableSeeder::class,
            RequestsTableSeeder::class,
        ]);
    }
}
