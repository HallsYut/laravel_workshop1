<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelephonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('telephones')->insert(
            array(
                ['name'=>'081-0000000','staff_id'=>1],
                ['name'=>'082-0000000','staff_id'=>1],
                ['name'=>'083-0000000','staff_id'=>3],
                ['name'=>'084-0000000','staff_id'=>3],
                ['name'=>'085-0000000','staff_id'=>2],
            )
        );
    }
}
