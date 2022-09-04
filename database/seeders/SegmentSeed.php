<?php

namespace Database\Seeders;

use App\Models\Segment;
use Database\Factories\SegmentFactory;
use Illuminate\Database\Seeder;

class SegmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Segment::factory()
        ->count(10)
        ->create();
    }
}
