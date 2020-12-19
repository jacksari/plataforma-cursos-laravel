<?php

namespace Database\Factories;

use App\Models\Requirements;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequirementsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Requirements::class;

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
