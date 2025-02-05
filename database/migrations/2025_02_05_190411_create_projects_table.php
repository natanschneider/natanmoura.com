<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->string('name', 255);
            $table->string('img_url', 255)->nullable();
            $table->string('url', 255)->nullable();
            $table->string('repo', 255);
        });

        Schema::create('technologies', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->string('name', 255);
            $table->string('url', 255);
        });

        Schema::create('stack', function(Blueprint $table){
            $table->id('id')->primary();
            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_technology');

            $table->foreign('id_project')->references('id')->on('projects');
            $table->foreign('id_technology')->references('id')->on('technologies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('stack');
        Schema::dropIfExists('technologies');
    }
};
