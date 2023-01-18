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
            $table->integer('class_id');
            $table->string('name');
            $table->string('kana');
            $table->string('email');
            $table->string('password');
            $table->integer('zip_code');
            $table->string('address1');
            $table->string('address2');
            $table->integer('tel');
            $table->tinyInteger('gender');
            $table->date('birthday');
            $table->date('joindate');
            $table->tinyInteger('is_payment');
            $table->string('introducer');
            $table->string('parent_name');
            $table->string('canpaign');
            $table->string('memo')->nullable();
            $table->tinyInteger('is_rest');
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
