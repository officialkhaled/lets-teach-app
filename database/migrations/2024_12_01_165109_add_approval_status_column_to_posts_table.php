<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->tinyInteger('approval_status')->default(0)->comment('0: Unapproved, 1: Approved, 2: Rejected')->after('status');
        });
    }
    
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('approval_status');
        });
    }
};
