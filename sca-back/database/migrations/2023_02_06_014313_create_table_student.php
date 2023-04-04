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
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('serial_number',10);
            $table->string('mail');
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('general_data_id');
            $table->foreign('group_id')->references('id')->on('group');
            $table->foreign('general_data_id')->references('id')->on('generaldata');
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
        Schema::dropIfExists('table_student');
    }
};
