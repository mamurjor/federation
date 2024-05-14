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
        Schema::create('nominis', function (Blueprint $table) {
            $table->id();
            $table->integer('nomini_id');
            $table->string('country',255);
            $table->string('district',255);
            $table->string('tehsil',255);
            $table->string('announce',255);
            $table->string('votetype',255);
            $table->string('votepositiontype',255);
            $table->date('votingdate');
            $table->string('charge',255);
            $table->string('card_number',255);
            $table->string('stripe_token',255);
            $table->string('payment_type',255);
            $table->enum('status',[0,1])->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominis');
    }
};
