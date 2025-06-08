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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable(); // Title of the task
            $table->text('description')->nullable(); // Description of the task
            $table->dateTime('due_date')->nullable(); // Due date for the task
            $table->enum('status', ['pending', 'completed', 'in-progress'])->default('pending'); // Status of the task
            $table->enum('priority', ['low', 'medium', 'high'])->default('medium'); // Priority of the task
            $table->string('assigned_to')->nullable(); // User ID or name to whom the task is assigned
            $table->string('created_by')->nullable(); // User ID or name who created the task

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};