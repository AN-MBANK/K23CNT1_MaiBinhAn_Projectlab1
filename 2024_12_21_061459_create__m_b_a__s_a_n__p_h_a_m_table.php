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
        Schema::create('MBA_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('mbaMasanpham',255)->unique();
            $table->string('mbaTensanpham',255);
            $table->string('mbaHinhanh',255);
            $table->integer('mbaSoluong');
            $table->float('mbaDongia');
            $table->bigInteger('mbaMaloai')->references('mbaMaloai')->on('MBA_LOAI_SAN_PHAM');
            $table->tinyInteger('mbaTrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MBA_SAN_PHAM');
    }
};
