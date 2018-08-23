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
            StudentFileSeeder::class,
            ClassesSeeder::class,
            LessonSeeder::class,
            OwnerSeeder::class,
            SchoolSeeder::class,
        ]);
    }
}
