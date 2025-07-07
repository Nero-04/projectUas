<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tarifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kendaraan_id');
            $table->string('no_polisi', 20);
            $table->enum('golongan', ['I', 'II', 'III', 'IV', 'V']);
            $table->integer('harga');
            $table->timestamps();

            $table->unique(['kendaraan_id', 'no_polisi', 'golongan']);
            $table->foreign('kendaraan_id')->references('id')->on('kendaraans')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tarifs');
    }
};
