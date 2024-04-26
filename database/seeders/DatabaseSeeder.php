<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(CategoriesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(GadgetsTableSeeder::class);
        $this->call(StaffsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(TelephonesTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(Building_pointsTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);
    }
}
