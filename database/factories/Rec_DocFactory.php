<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Rec_DocFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'location' => fake()->city(),
            'disease_understand' => fake()->name().'disease'.
            ' , ' .fake()->name().'disease'
            .' , ' .fake()->name().'disease',
            'rating' => fake()->randomDigit(),
            'academic_position' => 'Dr',
            ];
    }
}
