<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('subject', 'subjects');
            $table->renameColumn('class', 'grade');
            $table->renameColumn('tags', 'status');
        });
    }
    
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('subjects', 'subject');
            $table->renameColumn('grade', 'class');
            $table->renameColumn('status', 'tags');
        });
    }
};
