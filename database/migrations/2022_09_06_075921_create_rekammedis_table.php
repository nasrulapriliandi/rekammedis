<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekammedis', function (Blueprint $table) {
            $table->id();
            $table->integer('norekammedis');
            $table->foreignId('pasien_id')->constrained('pasiens')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('diagnosa_id')->constrained('diagnosas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('obat_id')->constrained('obats')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tgl_berobat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekammedis');
    }
};
