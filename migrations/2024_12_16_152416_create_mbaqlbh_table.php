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
        Schema::create('mbaqlbh', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();
           $table->string('mbaMDH')->primary();
           $table->string('mbaTDH')->unique();
           $table->string('mbaDCDH');
           $table->string('mbaDTDH');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbaqlbh');
    }
};
