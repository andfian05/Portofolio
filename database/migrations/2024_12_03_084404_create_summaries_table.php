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
        Schema::create('summaries', function (Blueprint $table) {
            $table->id();
            $table->string('span_title')->nullable();
            $table->string('heading_title')->nullable();
            $table->text('desc_title')->nullable();
            $table->text('java')->nullable();
            $table->text('japanese')->nullable();
            $table->text('korean')->nullable();
            $table->text('arabic')->nullable();
            $table->text('russian')->nullable();
            $table->text('resume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('summaries');
    }
};
