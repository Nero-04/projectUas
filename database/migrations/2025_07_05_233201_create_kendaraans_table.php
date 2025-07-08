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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('kendaraan_id', 10)->unique()->nullable(); // Kolom Kendaraan ID
            $table->string('no_polisi', 20)->unique();
            $table->enum('golongan', ['I', 'II', 'III', 'IV', 'V']);
            $table->decimal('tinggi_kendaraan', 3, 2); // max 2.1 meter
            $table->enum('jenis_kendaraan', ['mobil pribadi', 'truck']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
