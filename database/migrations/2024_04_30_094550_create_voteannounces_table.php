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
        Schema::create('voteannounces', function (Blueprint $table) {
            $table->id();
            $table->string('country',255);
            $table->string('district',255);
            $table->string('tehsil',255);
            $table->string('announce',255);
            $table->string('votetype',255);
            $table->string('votepositiontype',255);
            $table->date('votingdate');
            $table->string('image',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voteannounces');
    }
};
