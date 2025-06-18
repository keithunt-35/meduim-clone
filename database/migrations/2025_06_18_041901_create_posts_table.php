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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(); // Optional image field for the post, can be null
            $table->string('title');
            $table->string('slug')->unique(); // Slug is a URL-friendly version of the title, unique for each post
            $table->longText('content');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');//cascade delete means if a category is deleted, all posts in that category will also be deleted
            // This is a foreign key that references the categories table, ensuring referential integrity
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // This is a foreign key that references the users table, ensuring referential integrity
            $table->timestamp('published_at')->nullable(); // Optional timestamp for when the post is published
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
