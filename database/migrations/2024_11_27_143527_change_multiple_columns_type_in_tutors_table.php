<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('tutors', function (Blueprint $table) {
            $table->json('skills')->nullable()->change();
            $table->json('tags')->nullable()->change();
        });
    }
    
    public function down(): void
    {
        Schema::table('tutors', function (Blueprint $table) {
            $table->string('skills')->nullable()->change();
            $table->string('tags')->nullable()->change();
        });
    }
};
