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
        Schema::create('table_trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione di Partenza');
            $table->string('Stazione di Arrivo');
            $table->time('Orario di Partenza');
            $table->time('Orario di Arrivo');
            $table->float('Codice Treno');
            $table->float('Numero di carrozze');
            $table->boolean('In orario');
            $table->boolean('Cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_trains');
    }
};
