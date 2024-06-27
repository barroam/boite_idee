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
        Schema::create('idees', function (Blueprint $table) {
            $table->id();
            $table->string('auteur');
            $table->string('libelle');
            $table->string('description');
            $table->date('date_creation');
            $table->enum('status', ['en attente', 'approuvée', 'refusée'])->default('en attente'); // Statut avec une valeur par défaut 'en attente'
        //    $table->enum('role', ['admin', 'user'])->default('user'); // Ajouter une colonne enum 'role'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idees');
    }
};
