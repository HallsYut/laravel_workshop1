<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert(
            array(
                ['name'=>'CRT','category_id'=>'1'],
                ['name'=>'LCD','category_id'=>'1'],
                ['name'=>'LED','category_id'=>'1'],
                ['name'=>'สูญณาอาศ','category_id'=>'4'],
            )
        );
    }
}
