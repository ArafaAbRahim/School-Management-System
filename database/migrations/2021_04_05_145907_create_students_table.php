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
            $table->string('first_name'); 
            $table->string('last_name');  
            $table->string('father_name'); 
            $table->string('mother_name'); 
            $table->date('dob'); 
            $table->integer('cls');
            $table->enum('version',['EV','BM']);  
            $table->bigInteger('section_id')->unsigned()->nullable();    
            $table->text('permanent_address');
            $table->text('present_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip'); 
            $table->string('phone');
            $table->string('emergency_phn')->nullable();                     
            $table->string('email')->unique()->nullable();
            $table->string('image')->nullable();
            $table->enum('gender',['male','female']);
            $table->timestamps();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
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
