<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            array(
                ['name'=>'ทีวี'],
                ['name'=>'ตู้เย็น'],
                ['name'=>'เตารีด'],
                ['name'=>'เครื่องดูดฝุ่น'],
            )
        );
    }
}
