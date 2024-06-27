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
        Schema::table('idees', function (Blueprint $table) {
            //
                     $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Clé étrangère user_id
           $table->foreignId('categorie_id')->constrained()->onDelete('cascade'); // Clé étrangère user_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('idees', function (Blueprint $table) {
            //
            $table->dropForeign(['categorie_id']);
            $table->dropColumn('categorie_id');
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
