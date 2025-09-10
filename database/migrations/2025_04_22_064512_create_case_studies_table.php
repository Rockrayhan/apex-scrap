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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('tags');
            $table->string('team_involvement');
            $table->string('image')->nullable(); // Will upload image
            $table->string('category');
            $table->text('short_desc');
            $table->json('services_we_provided');
            $table->string('industry');
            $table->string('year');
            $table->text('the_problem');
            $table->json('the_solution')->nullable();
            $table->text('the_results');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
