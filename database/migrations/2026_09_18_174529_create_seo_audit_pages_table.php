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
        Schema::create('seo_audit_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seo_audit_id')->constrained()->onDelete('cascade');
            $table->string('page_url');
            $table->string('title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('h1')->nullable();
            $table->string('status')->default('pending');
            $table->longText('data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_audit_pages');
    }
};
