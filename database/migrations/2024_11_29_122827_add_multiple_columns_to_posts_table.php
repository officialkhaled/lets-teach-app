<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('description')->after('grade')->nullable();
            $table->dateTime('from_time')->after('budget')->nullable();
            $table->dateTime('to_time')->after('from_time')->nullable();
        });
    }
    
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn([
                'description',
                'from_time',
                'to_time'
            ]);
        });
    }
};
