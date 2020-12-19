<?php

use App\Models\Courses;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            //Borrador, revisión, publicado
            $table->enum('status', [Courses::BORRADOR,Courses::REVISION, Courses::PUBLICADO])->default(Courses::BORRADOR);
            $table->string('slug');
            $table->string('language',5)->default('es');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('level_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('price_id')->nullable();
            $table->string('url');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('course_categories')->onDelete('set null');
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
