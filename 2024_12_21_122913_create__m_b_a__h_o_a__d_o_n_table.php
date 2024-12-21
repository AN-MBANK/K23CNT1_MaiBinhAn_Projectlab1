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
        Schema::create('MBA_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('mbaMahoadon',255)->unique();
            $table->string('mbaMakhachhang',255)->references('id')->on('MBA_KHACH_HANG');
            $table->date('mbaNgayhoadon');
            $table->string('mbaHotenkhachhang',255);
            $table->string('mbaEmail',255);
            $table->string('mbaDienthoai',255);
            $table->string('mbaDiachi',255);
            $table->float('mbaTongdongia');
            $table->tinyInteger('mbaTrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MBA_HOA_DON');
    }
};
