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
    Schema::create('applies', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->onDelete('CASCADE');
      $table->foreignId('job_id')->constrained()->onDelete('CASCADE');
      $table->enum('approved', ['true', 'false', 'rejected'])->default('false');
      $table->enum('done', ['true', 'false'])->default('false');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('applies');
  }
};
