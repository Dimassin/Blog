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
        if (!Schema::hasTable('posts')) {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('description')->nullable();
                $table->unsignedBigInteger('likes')->default(0);
                $table->unsignedBigInteger('dislikes')->default(0);
                $table->unsignedBigInteger('category_id')->nullable();
                $table->boolean('is_published')->default(true);
                $table->timestamps();

                $table->softDeletes();
                $table->foreign('category_id')->references('id')->on('categories');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
