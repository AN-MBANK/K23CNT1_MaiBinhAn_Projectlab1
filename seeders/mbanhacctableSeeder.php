<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class mbanhacctableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('mbanhacc')->insert([
                'mbaMNCC'=>$faker->uuid(),
                //'mbaMNCC'=>$faker->word(15),
                'mbaTNCC'=>$faker->sentence(5),
                'mbaDIACHI'=>$faker->address(),
                'mbaDT'=>$faker->phoneNumber(),
                'mbaemail'=>$faker->email(),
                'mbastatus'=>$faker->boolean()
            ]);
        }
    }
}
