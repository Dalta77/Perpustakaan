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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no_buku');
            $table->foreign('no_buku')->references('id')->on('buku');
            $table->unsignedBigInteger('id_anggota');
            $table->foreign('id_anggota')->references('id')->on('anggota');
            $table->date('tgl_peminjaman');
            $table->date('tgl_pengembalian')->nullable();
            $table->enum('status', ['kembali', 'belum']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->Foreign(['no_buku']);
            $table->Foreign(['id_anggota']);
        });
        Schema::dropIfExists('peminjaman');
    }
};
