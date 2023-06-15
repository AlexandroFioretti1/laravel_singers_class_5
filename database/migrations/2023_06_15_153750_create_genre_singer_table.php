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
        Schema::create('genre_singer', function (Blueprint $table) {
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('singer_id');
            $table->foreign('genre_id')->references('id')->on('genres')->cascadeOnDelete();
            $table->foreign('singer_id')->references('id')->on('singers')->cascadeOnDelete();

            $table->primary(['genre_id', 'singer_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_singer');
    }
};
