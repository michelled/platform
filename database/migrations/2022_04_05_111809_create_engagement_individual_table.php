<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngagementIndividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engagement_individual', function (Blueprint $table) {
            $table->enum('status', ['invited', 'confirmed', 'declined', 'removed', 'exited'])->default('invited');
            $table->foreignId('individual_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('engagement_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engagement_individual');
    }
}