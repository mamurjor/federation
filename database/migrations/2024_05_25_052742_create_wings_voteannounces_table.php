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
        Schema::create('wings_voteannounces', function (Blueprint $table) {
            $table->id();
            $table->string('type',255);
            $table->string('type_name',255);
            $table->string('profession_name',255);
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
        Schema::dropIfExists('wings_voteannounces');
    }
};
