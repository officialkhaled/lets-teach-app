<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('user_id');
            $table->string('phone_number')->nullable();
            $table->string('bio')->nullable();
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->string('skills')->nullable();
            $table->string('tags')->nullable();
            
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
