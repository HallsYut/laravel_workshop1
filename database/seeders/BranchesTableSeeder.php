<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->insert(
            array(
                ['name'=>'บางบอน','staff_id'=>1],
                ['name'=>'บางบอน','staff_id'=>2],
                ['name'=>'บางแค','staff_id'=>3],
                ['name'=>'บางแค','staff_id'=>4],
                ['name'=>'บางกะปิ','staff_id'=>5],
            )
        );
    }
}
