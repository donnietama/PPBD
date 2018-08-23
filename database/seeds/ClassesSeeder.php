<?php

use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Classes::class, 10)->create()->each(function ($cm) {
            $cm->save();
        });
        return $this->command->info('Class Table Seeded!');
    }
}
