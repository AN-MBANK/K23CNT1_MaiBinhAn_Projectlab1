<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MBA_QUAN_TRItableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mbamatkhau = md5('1232@2');
        DB::table('MBA_QUAN_TRI')->insert([
            'mbataikhoan'=>"******@gmail.com",
            'mbamatkhau'=>$mbamatkhau,
            'mbatrangthai'=>0

        ]);
        DB::table('MBA_QUAN_TRI')->insert([
            'mbataikhoan'=>"01040010471",
            'mbamatkhau'=>$mbamatkhau,
            'mbatrangthai'=>0

        ]);
    }
}
