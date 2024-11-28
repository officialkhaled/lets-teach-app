<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->json('subjects')->nullable()->change();
            $table->tinyInteger('tags')->nullable()->change();
        });
    }
    
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('subjects')->nullable()->change();
            $table->string('tags')->nullable()->change();
        });
    }
};
