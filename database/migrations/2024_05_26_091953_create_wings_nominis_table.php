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
        Schema::create('wings_nominis', function (Blueprint $table) {
            $table->id();
            $table->integer('wingsnomini_id');
            $table->string('wings',255);
            $table->string('announce',255);
            $table->string('votetype',255);
            $table->string('votepositiontype',255);
            $table->string('emailone',255);
            $table->string('emailtwo',255);
            $table->boolean('email_one_verified')->default(false);
            $table->boolean('email_two_verified')->default(false);
            $table->string('token_one')->nullable();
            $table->string('token_two')->nullable();
            $table->date('votingdate');
            $table->string('charge',255);
            $table->string('card_number',255);
            $table->string('stripe_token',255);
            $table->string('payment_type',255);
            $table->enum('status',[0,1])->default(0)->comment('0 = Pending, 1 = Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wings_nominis');
    }
};
