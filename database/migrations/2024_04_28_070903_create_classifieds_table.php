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
        Schema::create('classifieds', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("adid");
            $table->string("title", 255);
            $table->string("description", 255);
            $table->string("category", 255);
            $table->integer("price");
            $table->string("location", 255);
            $table->string("country", 255);
            $table->string("district", 255);
            $table->string("tehsil", 255);
            $table->string("email", 255);
            $table->string("video", 255);
            $table->date("dateposted");
            $table->date("expiredate");
            $table->string("image", 255);
            $table->string("multipleimage", 255);
            $table->string("condition", 255);
            $table->string("keyword", 255);
            $table->enum('status', ['active', 'inactive', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classifieds');
    }
};
