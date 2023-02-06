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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('class_id')->nullable();
            $table->string('name');
            $table->string('kana');
            $table->string('email');
            $table->string('password')->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('tel')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->date('joindate')->nullable();
            $table->tinyInteger('is_payment')->nullable();
            $table->string('introducer')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('canpaign')->nullable();
            $table->string('memo')->nullable()->nullable();
            $table->tinyInteger('is_rest')->nullable();
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
};
