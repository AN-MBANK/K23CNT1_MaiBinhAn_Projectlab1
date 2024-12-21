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
        Schema::create('MBA_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('mbaMakhachhang',255)->unique();
            $table->string('mbaTenkhachhang',255);
            $table->string('mbaEmail',255);
            $table->string('mbaMatkhau',255);
            $table->string('mbaDienthoai',255);
            $table->string('mbaDiachi',255);
            $table->date('mbaNgaydangky');
            $table->tinyInteger('mbaTrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MBA_KHACH_HANG');
    }
};
