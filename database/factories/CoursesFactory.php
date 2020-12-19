<?php

namespace Database\Factories;

use App\Models\CourseCategories;
use App\Models\Courses;
use App\Models\Levels;
use App\Models\Price;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CoursesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Courses::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement([Courses::BORRADOR,Courses::REVISION,Courses::PUBLICADO]),
            'slug' => Str::slug($title),
            'user_id' => 1,
                //User::all()->random()->id,
            'level_id' => Levels::all()->random()->id,
            'category_id' => CourseCategories::all()->random()->id,
            'price_id' => Price::all()->random()->id,
            'url' => 'cursos/' . $this->faker->image('public/storage/cursos',640,480,null,false,)

        ];
    }
}
