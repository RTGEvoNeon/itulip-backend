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
        Schema::table('sorts', function (Blueprint $table) {
            $table->decimal('price', 5, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sorts', function (Blueprint $table) {
            $table->decimal('price', 3, 2)->nullable()->change(); // Вернуть к 3, 2

        });
    }
};