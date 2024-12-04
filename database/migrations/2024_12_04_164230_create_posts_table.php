<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('student_id');
            $table->json('subject_ids')->nullable();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->text('description')->nullable();
            $table->string('budget')->nullable();
            $table->string('from_time')->nullable();
            $table->string('to_time')->nullable();
            $table->tinyInteger('approval_status')->default(0)->comment('0: Unapproved, 1: Approved, 2: Rejected');
            
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
