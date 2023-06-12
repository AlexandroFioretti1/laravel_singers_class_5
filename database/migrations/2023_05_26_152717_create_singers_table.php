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
        Schema::create('singers', function (Blueprint $table) {
            $table->id();
            $table->string('artist_name', 40);
            $table->string('slug', 150);
            $table->string('name', 15)->nullable();
            $table->string('lastname', 30)->nullable();
            $table->string('image_url', 255);
            $table->date('birth_date');
            $table->smallInteger('published_album')->nullable();
            $table->boolean('is_in_a_band')->default(false);
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
        Schema::dropIfExists('singers');
    }
};
