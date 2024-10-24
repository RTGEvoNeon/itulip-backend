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
            $table->string('color')->nullable()->change(); // Сделать поле color nullable
            $table->string('image')->nullable()->change(); // Сделать поле image nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sorts', function (Blueprint $table) {
            $table->string('color')->nullable(false)->change();
            $table->string('image')->nullable(false)->change();
        });
    }
};
