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
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('age');
            $table->string('hobiy');
            $table->string('description');
            $table->string('email');
            $table->string('number');
            $table->string('degree');
            $table->string('staj');
            $table->string('courses');
            $table->string('address');
            $table->string('work');
            $table->string('message');
            $table->string('telegramlink');
            $table->integer('user_id');

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
        Schema::dropIfExists('cruds');
    }
};
