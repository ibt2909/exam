<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->date('birthday');
            $table->boolean('gender', ['male', 'female']);
            $table->timestamps('created_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}

