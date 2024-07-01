<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classroom_id')->constrained();
            $table->foreignId('branch_id')->constrained();
            $table->foreignId('teacher_id')->nullable()->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}

