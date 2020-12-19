<?php

namespace Database\Factories;

use App\Models\Goals;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoalsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Goals::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
        ];
    }
}
