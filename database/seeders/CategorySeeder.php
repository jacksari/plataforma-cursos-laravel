<?php

namespace Database\Seeders;

use App\Models\CourseCategories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseCategories::create([
            'name' => 'Desarrollo Web'
        ]);
        CourseCategories::create([
            'name' => 'Diseño Web'
        ]);
        CourseCategories::create([
            'name' => 'Diseño UX'
        ]);
        CourseCategories::create([
            'name' => 'Diseño UI'
        ]);
        CourseCategories::create([
            'name' => 'Data Science'
        ]);
        CourseCategories::create([
            'name' => 'Machine Learning'
        ]);
    }
}
