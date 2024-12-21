<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MBA_SAN_PHAMtableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('MBA_SAN_PHAM')->insert([
            'mbaMasanpham' =>"VP001",
            'mbaTensanpham' =>"cay phu quy",
            'mbaHinhanh' => "images/san-pham/VP001.jpg",
            'mbaSoluong' => 100,
            'mbaDongia' => 699000,
            'mbaMaloai' =>1,
            'mbaTrangthai' =>0
        ]);
        DB::table('MBA_SAN_PHAM')->insert([
            'mbaMasanpham' =>"VP002",
            'mbaTensanpham' =>"cay dai phu gia",
            'mbaHinhanh' => "images/san-pham/VP002.jpg",
            'mbaSoluong' => 200,
            'mbaDongia' => 550000,
            'mbaMaloai' =>1,
            'mbaTrangthai' =>0
        ]);
        DB::table('MBA_SAN_PHAM')->insert([
            'mbaMasanpham' =>"VP003",
            'mbaTensanpham' =>"cay hanh phuc",
            'mbaHinhanh' => "images/san-pham/VP003.jpg",
            'mbaSoluong' => 150,
            'mbaDongia' => 250000,
            'mbaMaloai' =>1,
            'mbaTrangthai' =>0
        ]);
        DB::table('MBA_SAN_PHAM')->insert([
            'mbaMasanpham' =>"VP004",
            'mbaTensanpham' =>"cay van loc",
            'mbaHinhanh' => "images/san-pham/VP004.jpg",
            'mbaSoluong' => 300,
            'mbaDongia' => 799000,
            'mbaMaloai' =>1,
            'mbaTrangthai' =>0
        ]);
        DB::table('MBA_SAN_PHAM')->insert([
            'mbaMasanpham' =>"PT001",
            'mbaTensanpham' =>"cay thiet moc lan",
            'mbaHinhanh' => "images/san-pham/PT001.jpg",
            'mbaSoluong' => 150,
            'mbaDongia' => 590000,
            'mbaMaloai' =>3,
            'mbaTrangthai' =>0
        ]);
        DB::table('MBA_SAN_PHAM')->insert([
            'mbaMasanpham' =>"PT002",
            'mbaTensanpham' =>"cay truong sinh",
            'mbaHinhanh' => "images/san-pham/PT002.jpg",
            'mbaSoluong' => 100,
            'mbaDongia' => 150000,
            'mbaMaloai' =>3,
            'mbaTrangthai' =>0
        ]);
        DB::table('MBA_SAN_PHAM')->insert([
            'mbaMasanpham' =>"PT003",
            'mbaTensanpham' =>"cay hanh phuc",
            'mbaHinhanh' => "images/san-pham/PT003.jpg",
            'mbaSoluong' => 200,
            'mbaDongia' => 299000,
            'mbaMaloai' =>3,
            'mbaTrangthai' =>0
        ]);
        DB::table('MBA_SAN_PHAM')->insert([
            'mbaMasanpham' =>"PT004",
            'mbaTensanpham' =>"cay hoa nhai (lai ta)",
            'mbaHinhanh' => "images/san-pham/PT004.jpg",
            'mbaSoluong' => 300,
            'mbaDongia' => 199000,
            'mbaMaloai' =>3,
            'mbaTrangthai' =>0
        ]);
    }
}
