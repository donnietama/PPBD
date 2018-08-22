<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Owner::class, 10)->create()->each(function ($ns) {
            $ns->save();
        });
        return $this->command->info('Owner Table Seeded!');
    }
}
