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
        Schema::create('access_supports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->json('name');
            $table->json('description')->nullable();
            $table->boolean('in_person')->nullable();
            $table->boolean('virtual')->nullable();
            $table->boolean('documents')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_supports');
    }
};
