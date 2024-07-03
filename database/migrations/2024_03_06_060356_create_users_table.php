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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained('roles')->cascadeOnDelete();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->unique();
            $table->string('district')->nullable();
            $table->string('tehsil')->nullable();
            $table->string('cast')->nullable();
            $table->string('gender')->nullable();
            $table->string('facebook_url');
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('bio')->nullable();
            $table->string('short_bio')->nullable();
            $table->string('profession')->nullable();
            $table->string('Division')->nullable();
            $table->string('address_one')->nullable();
            $table->string('address_two')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('verify_code')->nullable();
            $table->string('avatar')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('userimage')->default('default/userimage.png');
            $table->string('zip_code')->nullable();
            $table->enum('status',[1,2,3])->comment('1 = Active, 2 = Pending, 3 = Cancel');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
