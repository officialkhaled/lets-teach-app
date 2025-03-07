<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('job_id')->nullable();
            $table->unsignedBigInteger('student_id');
            $table->json('subject_ids');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('medium_id');
            $table->unsignedBigInteger('gender_id')->default(1)->comment('1: Any, 2: Male, 3: Female');
            $table->unsignedBigInteger('tutoring_day_id');
            $table->unsignedBigInteger('tutoring_type_id')->default(1)->comment('1: Home, 2: Online');
            $table->string('salary');
            $table->string('from_time');
            $table->string('to_time');
            $table->text('location');
            $table->text('note')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0: Draft, 1: Approved, 2: Rejected, 3: Applied, 4: Assigned, 5: Confirmed, 6: Cancelled,');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
