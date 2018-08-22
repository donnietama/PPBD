<?php

use Illuminate\Database\Seeder;

class ClassManagementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ClassManagement::class, 10)->create()->each(function ($cm) {
            $cm->save();
        });
        return $this->command->info('Class Table Seeded!');
    }
}
