<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuscleSubGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('muscular_subgroups')->insert([
            // Deltoid
            [
                'name' => 'Anterior Deltoid',
                'muscle_id' => 1, 
            ],
            [
                'name' => 'Lateral Deltoid',
                'muscle_id' => 1, 
            ],
            [
                'name' => 'Posterior Deltoid',
                'muscle_id' => 1,
            ],

            //Biceps
            [
                'name' => 'Long Head',
                'muscle_id' => 2, 
            ],
            [
                'name' => 'Short Head',
                'muscle_id' => 2, 
            ],
            [
                'name' => 'Brachialis',
                'muscle_id' => 2, 
            ],

            //Triceps
            [
                'name' => 'Long Head',
                'muscle_id' => 3, 
            ],
            [
                'name' => 'Lateral Head',
                'muscle_id' => 3, 
            ],
            [
                'name' => 'Medial Head',
                'muscle_id' => 3, 
            ],

            // Chest
            [
                'name' => 'Upper Chest',
                'muscle_id' => 4,
            ],
            [
                'name' => 'Lower Chest',
                'muscle_id' => 4, 
            ],

            // Back
            [
                'name' => 'Trapezius',
                'muscle_id' => 5, 
            ],
            [
                'name' => 'teres',
                'muscle_id' => 5, 
            ],
            [
                'name' => 'Latissimus dorsi',
                'muscle_id' => 5, 
            ],
            [
                'name' => 'Erector spinale',
                'muscle_id' => 5, 
            ],

            // Abs
            [
                'name' => 'Upper Abs',
                'muscle_id' => 6, 
            ],
            [
                'name' => 'Lower Abs',
                'muscle_id' => 6, 
            ],
            [
                'name' => 'Obliques',
                'muscle_id' => 6,
            ],

            // Quadriceps
            [
                'name' => 'Rectus Femoris',
                'muscle_id' => 7, 
            ],
            [
                'name' => 'Vastus Lateralis',
                'muscle_id' => 7, 
            ],
            [
                'name' => 'Vastus Medialis',
                'muscle_id' => 7, 
            ],
            [
                'name' => 'Vastus Intermedius',
                'muscle_id' => 7, 
            ],

            // Glutes
            [
                'name' => 'Gluteus Maximus',
                'muscle_id' => 8, 
            ],
            [
                'name' => 'Gluteus Medius',
                'muscle_id' => 8, 
            ],
            [
                'name' => 'Gluteus Minimus',
                'muscle_id' => 8, 
            ],

            //  Hamstrings
            [
                'name' => 'Biceps Femoris',
                'muscle_id' => 9,
            ],
            [
                'name' => 'Semitendinosus',
                'muscle_id' => 9,
            ],
            [
                'name' => 'Semimembranosus',
                'muscle_id' => 9,
            ],

            // Calves
            [
                'name' => 'Gastrocnemius',
                'muscle_id' => 10,
            ],
            [
                'name' => 'Soleus',
                'muscle_id' => 10,
            ],
        ]);
    }
}
