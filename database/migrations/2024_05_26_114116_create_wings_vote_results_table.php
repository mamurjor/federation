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
        Schema::create('wings_vote_results', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('wingsnomini_id');
            $table->string('votepositiontype',255);
            $table->string('votetype',255);
            $table->string('votingdate',255);
            $table->string('type',255);
            $table->string('type_name',255);
            $table->string('profession_name',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wings_vote_results');
    }
};
