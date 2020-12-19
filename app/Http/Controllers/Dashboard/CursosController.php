<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CourseCategories;
use App\Models\Courses;
use App\Models\CourseUser;
use App\Models\Lessons;
use App\Models\LessonUser;
use App\Models\Levels;
use App\Models\Sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class CursosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorias = CourseCategories::all()->map(function ($categoria) {
            return [
                'id' => $categoria->id,
                'name' => $categoria->name,
            ];
        });
        $levels = Levels::all()->map(function ($categoria) {
            return [
                'id' => $categoria->id,
                'name' => $categoria->name,
            ];
        });

        return \Inertia\Inertia::render('Cursos/Cursos',[
            'categorias' => $categorias,
            'niveles' => $levels
        ]);
    }

    public function show($id)
    {
        $course = Courses::where('slug', $id)->get()->map(function ($course) {
                $can = false;
                if(auth()->user()){
                    $can = auth()->user()->can('enrolled', $course);
                }
                return [
                    'id' => $course->id,
                    'title' => $course->title,
                    'subtitle' => $course->subtitle,
                    'url' => $course->url,
                    'teacher_name' => $course->teacher->name,
                    'teacher_url' => $course->teacher->profile_photo_path,
                    'teacher_id' => $course->teacher->id,
                    'rating' => $course->rating,
                    'categoria' => $course->categoria,
                    'slug' => $course->slug,
                    'description' => $course->description,
                    'level' => $course->level,
                    'students_count' => $course->students_count,
                    'reviews_count' => $course->reviews_count,
                    'updated_at' => $course->updated_at,
                    'goals' => $course->goals,
                    'requirements' => $course->requirements,
                    'inscrito' => [
                        'can' => $can
                    ]
                ];
            });


        $sections = Sections::where('courses_id',$course[0]['id'])->get()->map(function ($section) {
            $lessons = Lessons::where('sections_id',$section['id'])->get()->map(function ($course) {
                return [
                    'id' => $course->id,
                    'name' => $course->name
                ];
            });
            return [
                'id' => $section->id,
                'name' => $section->name,
                'lessons' => $lessons
            ];
        });



        $courses = Courses::where('category_id', $course[0]['categoria']['id'])
                            ->where('id','!=', $course[0]['id'])
                            ->where('status',3)
                            ->latest('id')
                            ->get()->take(4)->map(function ($course) {
            return [
                'id' => $course->id,
                'title' => $course->title,
                'url' => $course->url,
                'teacher_name' => $course->teacher->name,
                'teacher_url' => $course->teacher->profile_photo_path,
                'rating' => $course->rating,
                'slug' => $course->slug
            ];
        });
        return Inertia::render('Cursos/Curso',[
            'course' => $course,
            'courses' => $courses,
            'sections' => $sections
        ]);
    }

    public function courses(Request $request){

        $todo = $request->todo;
        $categoria = $request->categoria;
        $nivel = $request->nivel;


        if($todo == 'todo'){
            $coursesPag = Courses::where('status', 3)->latest('id')->paginate(8);
            $courses = Courses::where('status', 3)->latest('id')->paginate(8)->take(8)->map(function ($course) {
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
        }else if($categoria == ''){
            $coursesPag = Courses::where('status', 3)->where('level_id',$nivel)->latest('id')->paginate(8);
            $courses = Courses::where('status', 3)->where('level_id',$nivel)->latest('id')->paginate(8)->take(8)->map(function ($course) {
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
        }else{
            $coursesPag = Courses::where('status', 3)->where('category_id',$categoria)->latest('id')->paginate(8);
            $courses = Courses::where('status', 3)->where('category_id',$categoria)->latest('id')->paginate(8)->take(8)->map(function ($course) {
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
        }


        return [
            'pagination' => [
                'total' => $coursesPag->total(),
                'current_page' => $coursesPag->currentPage(),
                'per_page' => $coursesPag->perPage(),
                'paginas' => $coursesPag->lastPage(),
                'from' => $coursesPag->firstItem(),
                'to' => $coursesPag->lastItem(),
                //'range' => $coursesPag->getUrlRange($coursesPag->firstItem(), $coursesPag->lastItem()),

            ],
            'courses' => $courses
        ];


    }
    public function enrolled($id){

        $course_user = CourseUser::create([
            'user_id' => auth()->user()->id,
            'courses_id' => $id
        ]);

        return redirect()->route('cursos.subscribe',['curso'=>$id]);
    }

    public function subscribe($id){

        if(auth()->user()){
            $course = Courses::where('id', $id)->get()->map(function ($course) {
                return [
                    'id' => $course->id,
                    'title' => $course->title,
                    'url' => $course->url,
                    'teacher_name' => $course->teacher->name,
                    'teacher_url' => $course->teacher->profile_photo_path,
                    'teacher_id' => $course->teacher->id,
                    'slug' => $course->slug,
                ];
            });
        }




        return Inertia::render('Home/Subscribe',[
            'course' => $course[0],
        ]);
    }

    public function status($slug){

         $course = Courses::where('slug', $slug)->get()->map(function ($course) {
            return [
                'id' => $course->id,
                'title' => $course->title,
                'teacher_name' => $course->teacher->name,
                'teacher_url' => $course->teacher->profile_photo_path,
                'teacher_id' => $course->teacher->id,
                'slug' => $course->slug,
            ];
        });

        $sections = Sections::where('courses_id',$course[0]['id'])->get()->map(function ($section) {
            $lessons = Lessons::where('sections_id',$section['id'])->get()->map(function ($course) {
                return [
                    'id' => $course->id,
                    'name' => $course->name,
                    //'url' => $course->url,
                    //'iframe' => $course->iframe,
                    //'platforms_id' => $course->platforms_id,
                    'completed' =>$course->completed
                ];
            });
            return [
                'id' => $section->id,
                'name' => $section->name,
                'lessons' => $lessons
            ];
        });
        return Inertia::render('Cursos/CursoStatus',[
            'curso' => $course[0],
            'sections' => $sections
        ]);
    }
    public function mycourses(){
        $course = auth()->user()->courses_enrolled->map(function ($course) {
            $sections = Sections::where('courses_id',$course['id'])->get()->map(function ($section) {
                $lessons = Lessons::where('sections_id',$section['id'])->get()->map(function ($course) {
                    return [
                        'id' => $course->id,
                        //'name' => $course->name,
                        //'url' => $course->url,
                        //'iframe' => $course->iframe,
                        //'platforms_id' => $course->platforms_id,
                        'completed' =>$course->completed
                    ];
                });
                return [
                    'id' => $section->id,
                    //'name' => $section->name,
                    'lessons' => $lessons
                ];
            });
            return [
                'id' => $course->id,
                'name_course' =>$course->title,
                'sections' => $sections,
                'categoria' => $course->categoria->name,
                'slug' => $course->slug,
                'description' => $course->description,

            ];
        });



        return Inertia::render('Cursos/MyCourses',[
            'courses' => $course
        ]);
    }

    public function videolesson($id){

        $lesson = Lessons::where('id',$id)->get()->map(function ($course) {
            return [
                'id' => $course->id,
                'name' => $course->name,
                'url' => $course->url,
                'iframe' => $course->iframe,
                'platforms_id' => $course->platforms_id,
                'completed' =>$course->completed
            ];
        });

        return $lesson;
    }

    public function selectlesson($id){
        $lessons = Lessons::where('id',$id)->get()->map(function ($course) {
            return [
                'id' => $course->id,
                //'users' => $course->users,
                'completed' =>$course->completed,
                'course' => $course->section->courses_id
            ];
        });
        if($lessons[0]['completed']){
            DB::table('lessons_user')->where('user_id',auth()->user()->id)->where('lessons_id',$id)->delete();
        }else{
            LessonUser::create([
                'lessons_id' => $id,
                'user_id' => auth()->user()->id
            ]);
        }
        $course = Courses::where('id',$lessons[0]['course'])->get()->map(function ($course) {
            return [
                'slug' => $course->slug
            ];
        });
        //return redirect()->back();
        $slug = $course[0]['slug'];
        //return redirect()->back();
        //return $slug;
        //return redirect()->route('cursos.subscribe',['curso'=>20]);
        return redirect()->route('cursos.course-status',['curso'=>$slug]);
    }
}
