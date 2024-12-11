<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('images');
            $table->string('name');
            $table->string('gender');
            $table->date('dateofbirth');
            $table->string('placeofbirth');
            $table->string('address');
            $table->string('religion');
            $table->string('telephone');
            $table->string('school');
            $table->string('program');
            $table->string('parentsname');
            $table->string('phone');
            $table->text('note');
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
