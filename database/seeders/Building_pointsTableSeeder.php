<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Building_pointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('building_points')->insert(
            array(
                ['name'=>'บิ๊กซีเพชรเกษม69','branch_id'=>1],
                ['name'=>'บิ๊กซีพุทธมณฑลสาย3','branch_id'=>2],
                ['name'=>'เดอะมอลล์บางแค','branch_id'=>3],
                ['name'=>'โลตัสบางแค','branch_id'=>4],
                ['name'=>'โลตัสบางกะปิ','branch_id'=>5],
            )
        );
    }
}
