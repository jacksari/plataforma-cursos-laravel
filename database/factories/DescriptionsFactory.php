<?php

namespace Database\Factories;

use App\Models\Descriptions;
use Illuminate\Database\Eloquent\Factories\Factory;

class DescriptionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Descriptions::class;

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
