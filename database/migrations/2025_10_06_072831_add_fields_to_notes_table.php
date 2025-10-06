<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table(('notes'))->truncate();

        Schema::table('notes', function (Blueprint $table) {
            $table->boolean('is_pinned')->default(false);
            $table->string('bg_color')->default('bg-white');
            $table->unsignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notes', function (Blueprint $table) {
            $table->dropColumn(['is_pinned', 'bg_color']);
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
