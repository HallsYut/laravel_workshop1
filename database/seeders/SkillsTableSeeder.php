<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert(
            array(
                ['name'=>'ว่ายน้ำ','staff_id'=>1],
                ['name'=>'ฟุตบอล','staff_id'=>1],
                ['name'=>'ปิงปอง','staff_id'=>1],
                ['name'=>'เขียนโปรแกรม','staff_id'=>2],
                ['name'=>'เล่นดนตรี','staff_id'=>3],
            )
        );
    }
}
