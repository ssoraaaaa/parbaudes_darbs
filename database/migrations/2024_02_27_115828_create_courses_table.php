<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function down()
    {
        Schema::dropIfExists('courses');
    }


   
    public function store()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('banner_url');
            $table->integer('students_count');
            $table->timestamps();
         });
    }


};
