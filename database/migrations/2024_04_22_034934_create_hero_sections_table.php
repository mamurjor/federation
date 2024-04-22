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
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string("title", 300)->default('');
            $table->string("slogan", 300)->default('');
            $table->string("slug", 300)->default('');
            $table->string("imageurl", 300)->default('');
            $table->string("button_one_text", 300)->default('');
            $table->string("button_one_url", 300)->default('#');
            $table->string("button_two_text", 300)->default('');
            $table->string("button_two_url", 300)->default('#');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
