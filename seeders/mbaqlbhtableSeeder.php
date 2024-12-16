<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mbaqlbhtableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mbaqlbh')->insert([
            'mbaMDH'=>'D01',
            'mbaTDH'=>'vp1',
            'mbaDCDH'=>'noi can ship den',
            'mbaDVTINH'=>'don',
            'mbaDTDH'=>40,
        ]);
        DB::table('mbaqlbh')->insert([
            'mbaMDH'=>'D02',
            'mbaTDH'=>'vp2',
            'mbaDCDH'=>'noi can ship den',
            'mbaDVTINH'=>'don',
            'mbaDTDH'=>50,
        ]);
}}
