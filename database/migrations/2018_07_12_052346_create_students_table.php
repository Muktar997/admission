<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {

            $table->increments('id');
            $table->string('student_name');
            $table->integer('hsc_roll');
            $table->string('reg_number');
            $table->string('session');
            $table->double('math');
            $table->double('physics');
            $table->double('chemistry');
            $table->double('english');
            $table->double('total_marks');
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
        Schema::dropIfExists('students');
    }
}
