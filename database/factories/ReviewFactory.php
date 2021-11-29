<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'doctor_id' => Doctor::pluck('id')[$this->faker->numberBetween(1, Doctor::count() - 1)],
            'stars' => rand(0, 5),
            'review' => $this->faker->realText(100, 3),
        ];
    }
}
