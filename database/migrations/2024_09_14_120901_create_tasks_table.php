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
            $table->id('task_id');
            // $table->foreingIdFor(User::class);

            $table->unsignedBigInteger('user_id')
                ->index();

            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('status');
            $table->string('priority');
            $table->string('deadline');

            $table->timestamps();

            // Unique constraint set a col to be unique and not allow duplicates
            // $table->unique(['user_id']);
        });


        Schema::table('tasks', function ($table) {
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onDelete('cascade');
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