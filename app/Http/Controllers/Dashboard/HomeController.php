<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){


        $courses = Courses::where('status', 3)->latest('id')->get()->take(8)->map(function ($course) {
            return [
                'id' => $course->id,
                'title' => $course->title,
                'url' => $course->url,
                'teacher' => $course->teacher->name,
                'rating' => $course->rating,
                'category' => $course->categoria->name,
                'level_id' => $course->level_id,
                'students_count' => $course->students_count,
                'reviews_count' => $course->reviews_count,
                'slug' => $course->slug
            ];
        });

        //return $courses;



        return \Inertia\Inertia::render('Home/Home',[
            'courses' => $courses,
        ]);
    }

}
