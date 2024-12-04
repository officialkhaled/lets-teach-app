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
            $table->text('bio')->nullable();
            $table->string('experience')->nullable();
            $table->json('education')->nullable();
            $table->json('subject_ids')->nullable();
            $table->json('grade_ids')->nullable();
            
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
