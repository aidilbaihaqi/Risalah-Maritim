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
        Schema::create('members', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->string('photo_banner')->nullable();
            $table->enum('position', ['Ketua', 'Wakil Ketua', 'Bendahara', 'Pengatur Finansial', 'Sekretaris', 'Ketua Divisi', 'Anggota']);
            $table->enum('division', ['Redaksi', 'Reporter', 'Teknologi Informasi', 'Sastra', 'Isak Senja', 'Berita', 'Tim Kreatif', 'Hubungan Masyarakat'])->nullable();
            $table->string('major');
            $table->enum('campus', ['FTTK', 'FEBM', 'FK', 'FKIP', 'FISIP', 'FIKP']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
