<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StatusCourse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $curso = $request->curso;
        $courses = auth()->user()->courses_enrolled;
        foreach ($courses as $course){
            if($course->slug == $curso){
                return $next($request);
            }
        }
        return redirect('/');

    }
}
