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
        Schema::create('MBA_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mbaHoadonID')->references('id')->on('MBA_HOA_DON');
            $table->bigInteger('mbaSanphamID')->references('id')->on('MBA_SAN_PHAM');
            $table->integer('mbaSoluongmua');
            $table->float('mbaDongiamua');
            $table->float('mbaThanhtien');
            $table->tinyInteger('mbaTrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MBA_CT_HOA_DON');
    }
};
