<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('name_en')->after('id');
            $table->string('name_zh')->nullable()->after('name_en');
            $table->dropUnique(['name']); // remove unique on old column if exists
            $table->dropColumn('name');
        });
    }

    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('name')->unique();
            $table->dropColumn(['name_en', 'name_zh']);
        });
    }
};
