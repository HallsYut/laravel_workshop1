<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promotions')->insert(
            array(
                ['name'=>'ซื้อ 5 แถม 1','branch_id'=>1],
                ['name'=>'ซื้อ 10 แถม 3','branch_id'=>2],
                ['name'=>'นักศึกษาลด 80%','branch_id'=>3],
                ['name'=>'นาทีทอง','branch_id'=>4],
                ['name'=>'ชิ้นที่ 2 ราคา 1 บาท','branch_id'=>5],
            )
        );
    }
}
