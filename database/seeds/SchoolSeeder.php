<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\School::class, 10)->create()->each(function ($ns) {
            $ns->save();
        });
        return $this->command->info('School Table Seeded!');
    }
}
