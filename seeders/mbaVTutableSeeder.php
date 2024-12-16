<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mbaVTutableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mbavtu')->insert([
            'mbaMVT'=>'DD01',
            'mbaTVT'=>'DVD 1 door',
            'mbaDVTINH'=>'Bo',
            'mbaPHANTRAM'=>40,
        ]);
        DB::table('mbavtu')->insert([
            'mbaMVT'=>'DD02',
            'mbaTVT'=>'DVD 3 door',
            'mbaDVTINH'=>'Bo',
            'mbaPHANTRAM'=>50,
        ]);
    }
}
