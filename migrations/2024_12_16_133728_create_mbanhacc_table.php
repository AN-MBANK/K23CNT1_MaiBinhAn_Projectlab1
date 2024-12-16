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
        Schema::create('mbanhacc', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();
           $table->string('mbaMNCC')->primary();
           $table->string('mbaTNCC');
           $table->string('mbaDIACHI');
           $table->string('mbaDT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbanhacc');
    }
};
