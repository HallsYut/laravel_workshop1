<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staffs')->insert(
            array(
                ['name'=>'สมชาย','age'=>40,'email'=>'somchai@gmail.com','position'=>'หัวหน้าฝ่าย'],
                ['name'=>'สมศรี','age'=>45,'email'=>'sosri@gmail.com','position'=>'พนักงาน'],
                ['name'=>'สุชาติ','age'=>35,'email'=>'suchart@gmail.com','position'=>'พนักงาน'],
                ['name'=>'สุนทร','age'=>37,'email'=>'sunthorn@gmail.com','position'=>'หัวหน้าช่าง'],
                ['name'=>'สรพงษ์','age'=>48,'email'=>'soraphong@gmail.com','position'=>'หัวหน้าฝ่าย'],
            )
        );
    }
}
