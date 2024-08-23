<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('muscles')->insert([
            [
                'name' => 'Deltoid',
                'location' => 'Superior',
                'Size' => 'Small',
            ],
            [
                'name' => 'Biceps',
                'location' => 'Superior',
                'Size' => 'Small',
            ],
            [
                'name' => 'Triceps',
                'location' => 'Superior',
                'Size' => 'Small',
            ],
            
            [
                'name' => 'Chest',
                'location' => 'Superior',
                'Size' => 'Big',
            ],
            [
                'name' => 'Back',
                'location' => 'Superior',
                'Size' => 'Big',
            ],
            [
                'name' => 'Abs',
                'location' => 'Superior',
                'Size' => 'Big',
            ],
            [
                'name' => 'Quadriceps',
                'location' => 'Inferior',
                'Size' => 'Big',
            ],
            [
                'name' => 'Glutes',
                'location' => 'Inferior',
                'Size' => 'Big',
            ],
            [
                'name' => 'Hamstrings',
                'location' => 'Inferior',
                'Size' => 'Big',
            ],
            [
                'name' => 'Calves',
                'location' => 'Inferior',
                'Size' => 'Small',
            ],
        ]);
    }
}
