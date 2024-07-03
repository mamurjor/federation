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
        Schema::create('vote_results', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('nomini_id');
            $table->string('votepositiontype',255);
            $table->string('votetype',255);
            $table->string('votingdate',255);
            $table->string('Division',255);
            $table->string('district',255);
            $table->enum('status',[0,1])->default(0)->comment('0 = Failed, 1 = Selected');
            $table->string('tehsil',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote_results');
    }
};
