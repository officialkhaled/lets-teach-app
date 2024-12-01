<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->json('subject')->nullable()->change();
            $table->tinyInteger('class')->nullable()->change();
            $table->tinyInteger('tags')->nullable()->comment('1: Active, 2: Inactive')->default(1)->change();
            $table->string('budget')->nullable()->change();
        });
    }
    
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('subject')->nullable()->change();
            $table->string('class')->nullable()->change();
            $table->string('tags')->nullable()->change();
            $table->string('budget')->change();
        });
    }
};
