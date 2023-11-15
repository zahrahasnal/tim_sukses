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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('kategori');
            $table->string('kd_whm');
            $table->string('status');
            $table->date('tgl_pemantauan');
            $table->date('tgl_last_update');
            $table->string('berita');
            $table->string('logo');
            $table->string('cms');
            $table->string('keamanan');
            $table->string('error'); // Mengizinkan nilai NULL
            $table->text('ket_error')->nullable();
            $table->string('submitted')->default('Null'); // Mengizinkan nilai NULL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
