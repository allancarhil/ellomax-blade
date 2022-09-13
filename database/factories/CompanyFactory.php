<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'=>1,
            'status'=>1,
            'companyName'=> $this->faker->name(),
            'occupation_id'=>rand(1,10),
            'segment_id'=>rand(1,10),
        ];
    }
}
