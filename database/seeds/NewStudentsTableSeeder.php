<?php

use Illuminate\Database\Seeder;

class NewStudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\NewStudent::class, 10)->create()->each(function ($ns) {
            $ns->save();
        });
        return $this->command->info('New Students Table Seeded!');
    }
}
