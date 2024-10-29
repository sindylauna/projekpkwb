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
        Schema::create('kelengkapan_legalitas_usahas', function (Blueprint $table) {
            $table->id();
            $table->enum('badan_usaha', ['pt', 'cv']);
            $table->string('akta_pendirian')->nullable();
            $table->string('NIB')->nullable();
            $table->string('SKDP')->nullable();
            $table->string('NPWP')->nullable();
            $table->string('SIUP')->nullable();
            $table->string('TDP')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelengkapan_legalitas_usahas');
    }
};