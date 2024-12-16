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
        Schema::create('mbaqlbhvt', function (Blueprint $table) {
           // $table->id();
          //  $table->timestamps();
           $table->string('mbaSodhvt');
           $table->string('mbaMDHvt');
           $table->integer('mbaSLDH');
           $table->primary(['mbaSodhvt','mbaMDHvt']);//khoa chinh tren 2cot
          //khoa ngoai
           $table->foreign('mbaSodhvt')->references('mbaSodhvt')->on('mbaqldhvt');
           $table->foreign('mbaMDHvt')->references('mbaMDHvt')->on('mbavtu');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbaqlbhvt');
    }
};
