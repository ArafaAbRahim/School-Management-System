<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add__students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); 
            $table->string('last_name');  
            $table->string('father_name'); 
            $table->string('mother_name'); 
            $table->date('dob'); 
            $table->enum('version',['EV','BM']);  
            $table->string('section');    
            $table->text('permanent_address');
            $table->text('present_address');
            $table->string('city');
            $table->string('state');
            $table->decimal('zip'); 
            $table->string('phone');
            $table->string('emergency_phn');                     
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->enum('gender',['male','female']);
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
        Schema::dropIfExists('add__students');
    }
}
