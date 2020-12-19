<?php

use App\Http\Controllers\Dashboard\CursosController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\HorariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::get('/cursos', [CursosController::class, 'index'])->name('cursos');
Route::get('/cursos/{cursos}', [CursosController::class, 'show'])->name('cursos.show');

Route::get('/cursos-listado',[CursosController::class, 'courses'])->name('cursos.cursos-listado');

Route::get('/cursos/{curso}/learning', [CursosController::class, 'status'])->middleware('auth','status')->name('cursos.course-status');

Route::post('/cursos/{curso}/enrolled', [CursosController::class, 'enrolled'])->middleware('auth')->name('cursos.enrolled');

Route::post('/lesson/{id}', [CursosController::class, 'selectlesson'])->name('lesson');


Route::get('/cursos/{curso}/subscribe', [CursosController::class, 'subscribe'])->middleware('auth')->name('cursos.subscribe');

Route::get('/my-courses', [CursosController::class, 'mycourses'])->middleware('auth')->name('my-courses');

Route::get('/lesson/{id}', [CursosController::class, 'videolesson'])->name('lesson');

Route::get('/horarios', HorariosController::class)->name('horarios');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/contacto', function () {
    return \Inertia\Inertia::render('Home/Contacto');
})->name('contacto');

Route::get('/politics', function () {
    return \Inertia\Inertia::render('Home/Politics');
})->name('politics');

Route::get('/terms', function () {
    return \Inertia\Inertia::render('Home/Terms');
})->name('terms');


