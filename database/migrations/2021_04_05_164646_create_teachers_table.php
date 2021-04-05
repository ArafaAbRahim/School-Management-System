<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); 
            $table->string('last_name');
            $table->date('dob'); 
            $table->integer('NID');          
            $table->text('permanent_address');
            $table->text('present_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip'); 
            $table->string('title'); 
            $table->string('phone');
            $table->string('emergency_phn')->nullable();                     
            $table->string('emailid')->unique();
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
        Schema::dropIfExists('teachers');
    }
}
