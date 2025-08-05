<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('work_experience_models', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('company');
            $table->date('from_date');
            $table->date('to_date')->nullable();
            $table->string('work_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experience_models');
    }
};
