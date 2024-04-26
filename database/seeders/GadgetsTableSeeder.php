<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GadgetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gadgets')->insert(
            array(
                ['name'=>'ชุดว่ายน้ำ','activity_id'=>'1'],
                ['name'=>'แว่นตาดำน้ำ','activity_id'=>'1'],
                ['name'=>'หมวกว่ายน้ำ','activity_id'=>'1'],
                ['name'=>'รองเท้าสตั๊ด','activity_id'=>'2'],
                ['name'=>'ไม้ปิงปอง','activity_id'=>'3'],
            )
        );
    }
}
