<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('h1_title')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('body')->nullable();
            $table->enum('status', ['draft', 'published', 'scheduled'])->default('draft');
            $table->foreignId('author_id')->nullable()->constrained('authors')->nullOnDelete();
            $table->timestamp('published_at')->nullable();
            $table->string('featured_image_path')->nullable();
            $table->string('featured_image_alt')->nullable();
            $table->string('featured_image_width')->nullable();
            $table->string('featured_image_height')->nullable();
            $table->text('featured_image_srcset')->nullable();
            $table->json('content_blocks')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('schema_output')->default('enabled');
            $table->string('primary_schema_type')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
