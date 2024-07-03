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
        Schema::create('dis_voteannounces', function (Blueprint $table) {
            $table->id();
            $table->string('Division',255);
            $table->string('district',255);
            $table->string('announce',255);
            $table->string('votetype',255);
            $table->string('votepositiontype',255);
            $table->date('votingdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dis_voteannounces');
    }
};
