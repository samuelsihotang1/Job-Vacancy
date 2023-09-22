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
    Schema::create('jobs', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('name_slug');
      $table->foreignId('user_id')->constrained()->onDelete('CASCADE');
      $table->string('short_text');
      $table->string('text');
      $table->enum('filled', ['true', 'false'])->default('false');
      $table->foreignId('category_id')->constrained()->onDelete('CASCADE');
      $table->string('hours');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('jobs');
  }
};
