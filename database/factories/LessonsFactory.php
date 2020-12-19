<?php

namespace Database\Factories;

use App\Models\Lessons;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lessons::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'url' => 'https://youtu.be/1lGAWMwFlJk',
            'iframe' => '1lGAWMwFlJk',
            'platforms_id' => 1
        ];
    }
}
