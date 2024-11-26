<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('tutors', function (Blueprint $table) {
            $table->json('education')->nullable()->change();
        });
    }
    
    public function down(): void
    {
        Schema::table('tutors', function (Blueprint $table) {
            $table->string('education')->nullable()->change();
        });
    }
};
