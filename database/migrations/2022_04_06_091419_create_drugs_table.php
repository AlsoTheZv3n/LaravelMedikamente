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
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->double('price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pharma_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pharma_id')->references('id')->on('pharmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drugs_');
    }
};
