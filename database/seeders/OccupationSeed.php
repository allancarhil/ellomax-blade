<?php

namespace Database\Seeders;

use App\Models\Occupation;
use Illuminate\Database\Seeder;

class OccupationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Occupation::factory()
         ->count(10)
         ->create();
     }
}
