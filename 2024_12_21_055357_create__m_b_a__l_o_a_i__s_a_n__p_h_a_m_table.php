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
        Schema::create('MBA_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('mbaMaloai',255)->unique();
            $table->string('mbaTenloai',255);
            $table->tinyInteger('mbaTrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MBA_LOAI_SAN_PHAM');
    }
};