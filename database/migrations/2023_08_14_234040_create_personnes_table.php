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
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 30);
            $table->string('prenom', 100);
            $table->string('surnom', 50);
            $table->date('date_naissance');
            $table->string('lieu_naissance', 100);
            $table->string('profession', 100);
            $table->text('bio');
            $table->foreignId('personne_id')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
