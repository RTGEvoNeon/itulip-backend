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
            $table->decimal('sold', 8, 0)->nullable()->default(0);
            $table->decimal('died', 8, 0)->nullable()->default(0);
            $table->decimal('collected', 8, 0)->nullable()->default(0);
            $table->decimal('planted', 9, 0)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sorts', function (Blueprint $table) {
            $table->dropColumn('sold');
            $table->dropColumn('died');
            $table->dropColumn('collected');
            $table->dropColumn('planted');
        });
    }
};
