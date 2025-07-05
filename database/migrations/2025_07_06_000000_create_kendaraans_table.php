<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('no_polisi')->unique();
            $table->enum('jenis_kendaraan', ['Truk', 'Mobil Pribadi']);
            $table->decimal('tinggi_kendaraan', 3, 2); // max 2.1 meter
            $table->enum('golongan', ['I', 'II', 'III', 'IV', 'V']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
