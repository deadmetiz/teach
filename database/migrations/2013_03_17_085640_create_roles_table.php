<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('course_name', 100);
            $table->text('course_text');
            $table->text('course_description');
            $table->string('course_language', 30);
            $table->text('course_test')->nullable();
        });

        Schema::create('language', function (Blueprint $table) {
            $table->id();
            $table->string('language_name', 100);
            $table->text('language_description');
            $table->string('language', 30);
        });
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
        });
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->string('email', 50);
            $table->string('name', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
