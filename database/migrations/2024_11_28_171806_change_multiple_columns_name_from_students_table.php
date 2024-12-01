<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('class', 'description');
            $table->renameColumn('tags', 'grade');
        });
    }
    
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('description', 'class');
            $table->renameColumn('grade', 'tags');
        });
    }
};
