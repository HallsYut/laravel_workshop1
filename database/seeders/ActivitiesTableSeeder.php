<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activities')->insert(
            array(
                ['name'=>'ว่ายน้ำ'],
                ['name'=>'ฟุตบอล'],
                ['name'=>'ปิงปอง'],
                ['name'=>'วิ่ง'],
                ['name'=>'นั่งสมาธิ'],
            )
        );
    }
}
