<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Courses;
use App\Models\Descriptions;
use App\Models\Goals;
use App\Models\Image;
use App\Models\Lessons;
use App\Models\Requirements;
use App\Models\Sections;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Courses::factory(20)->create();
        foreach ($courses as $course){
            Requirements::factory(4)->create([
                'courses_id' => $course->id
            ]);
            Goals::factory(4)->create([
                'courses_id' => $course->id
            ]);
            Audience::factory(4)->create([
                'courses_id' => $course->id
            ]);
            $sections = Sections::factory(4)->create([
                'courses_id' => $course->id
            ]);
            foreach ($sections as $section){
                $lessons = Lessons::factory(5)->create([
                    'sections_id' => $section->id
                ]);
                foreach ($lessons as $lesson){
                    Descriptions::factory(1)->create([
                        'lessons_id' => $lesson->id
                    ]);
                }
            }
        }
    }
}
