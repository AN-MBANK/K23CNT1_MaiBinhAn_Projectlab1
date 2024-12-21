<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MBA_LOAI_SAN_PHAMtableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('MBA_LOAI_SAN_PHAM')->insert([
            'mbaMaloai'=>"L01",
            'mbaTenloai'=>"cay canh van phong",
            'mbaTrangthai'=>0
        ]);
        DB::table('MBA_LOAI_SAN_PHAM')->insert([
            'mbaMaloai'=>"L02",
            'mbaTenloai'=>"cay de ban",
            'mbaTrangthai'=>0
        ]);
        DB::table('MBA_LOAI_SAN_PHAM')->insert([
            'mbaMaloai'=>"L03",
            'mbaTenloai'=>"cay canh phong thuy",
            'mbaTrangthai'=>0
        ]);
        DB::table('MBA_LOAI_SAN_PHAM')->insert([
            'mbaMaloai'=>"L04",
            'mbaTenloai'=>"cay thuy canh ",
            'mbaTrangthai'=>0
        ]);
        
    }
}
