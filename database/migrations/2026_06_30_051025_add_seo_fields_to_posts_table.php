<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('canonical_url')->nullable()->after('primary_schema_type');
            $table->string('meta_robots')->default('index,follow')->after('canonical_url');
            $table->string('og_title')->nullable()->after('meta_robots');
            $table->text('og_description')->nullable()->after('og_title');
            $table->string('og_image_path')->nullable()->after('og_description');
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['canonical_url', 'meta_robots', 'og_title', 'og_description', 'og_image_path']);
        });
    }
};
