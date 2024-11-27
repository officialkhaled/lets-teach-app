<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('tutors', function (Blueprint $table) {
            $table->renameColumn('skills', 'subjects');
            $table->renameColumn('tags', 'grades');
        });
    }
    
    public function down(): void
    {
        Schema::table('tutors', function (Blueprint $table) {
            $table->renameColumn('subjects', 'skills');
            $table->renameColumn('grades', 'tags');
        });
    }
};
