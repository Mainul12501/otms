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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_category_id');
            $table->text('title');
            $table->double('price');
            $table->string('image')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('starting_date')->nullable();
            $table->string('total_duration')->nullable();
            $table->string('total_class')->nullable();
            $table->tinyInteger('status')->nullable()->default(1);
            $table->string('total_hours')->nullable();
            $table->unsignedBigInteger('teacher_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
