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
        Schema::create('kos', function (Blueprint $table) {
                $table->id();
                $table->string('nama_kos');
                $table->text('alamat');
                $table->string('kota');
                $table->string('pemilik');
                $table->string('nomor_telepon');
                $table->enum('jenis_kos', ['putra', 'putri', 'campur']);
                $table->decimal('harga_per_bulan', 10, 2);
                $table->integer('jumlah_kamar');
                $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kos');
    }
};
