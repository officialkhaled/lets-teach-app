<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->tinyInteger('type')->comment('1: Subject, 2: Grade');
            $table->tinyInteger('status')->default(1)->comment('0: Inactive, 1: Active');
            
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
