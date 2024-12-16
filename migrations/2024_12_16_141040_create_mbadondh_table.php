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
        Schema::create('mbadondh', function (Blueprint $table) {
           // $table->id();
          //  $table->timestamps();
          $table->string('mbaSoDH')->primary();
          $table->string('mbaNGAYDH');
          $table->string('mbaMNCC');
          $table->foreign('mbaMNCC')->references('mbaMNCC')->on('mbanhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbadondh');
    }
};
