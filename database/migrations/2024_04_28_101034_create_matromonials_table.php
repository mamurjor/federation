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
        Schema::create('matromonials', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("matromonialid");
            $table->string("name", 255);
            $table->integer("age");
            $table->string("partner_age_range");
            $table->string("partner_location", 255);
            $table->string("partner_compatibility", 255);
            $table->string("partner_communication", 255);
            $table->longText("partner_requirment_text");
            $table->string("location", 255);
            $table->string("gender", 255);
            $table->string("religion", 255);
            $table->string("email", 255);
            $table->date("dateofbirth");
            $table->string("matromonialimage", 255);
            $table->string("marital", 255);
            $table->string("caste", 255);
            $table->string("Division", 255);
            $table->string("district", 255);
            $table->string("tehsil", 255);
            $table->string("height", 255);
            $table->string("education", 255);
            $table->string("familydetails", 255);
            $table->string("occupation", 255);
            $table->string("income", 255);
            $table->longText('aboutme');
            $table->longText('buisness_des');
            $table->enum('status', ['active', 'inactive', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matromonials');
    }
};
