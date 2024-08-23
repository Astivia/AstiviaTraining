<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accessories')->insert([
            ['name' => 'Machine'],
            //free Weights
            ['name' => 'Weight Plate'],
            ['name' => 'Dumbbell'],
            ['name' => 'Kettlebell'],
            ['name' => 'Bench'],
            ['name' => 'Power Rack'],
            //barbells
            ['name' => 'Barbell'],
            ['name' => 'EZ Bar'],
            ['name' => 'Hex Bar'],
            ['name' => 'Neutral Grip Bar'],
            ['name' => 'Landmine Attachment'],
            ['name' => 'Cable'],
            //Body
            ['name' => 'Parallettes'],
            ['name' => 'Pull-up Bar'],
            ['name' => 'Dip Station'],
            ['name' => 'Ab Roller'],
            ['name' => 'TRX Suspension Trainer'],
            ['name' => 'Weight Vest'],
            //Accesories
            ['name' => 'Arm Blaster'],
            //Cardio
            ['name' => 'Plyo Box'],
            ['name' => 'Resistance Band'],
            ['name' => 'Medicine Ball'],
            ['name' => 'Treadmill'],
            ['name' => 'Elliptical'],
            ['name' => 'Rowing Machine'],
            ['name' => 'Foam Roller'],
            ['name' => 'Swiss Ball'],
            ['name' => 'Balance Board'],
            ['name' => 'Battle Ropes'],
            ['name' => 'Slam Ball'],
            ['name' => 'Sled'],
            ['name' => 'Speed Rope'],
            ['name' => 'Agility Ladder'],
            ['name' => 'Punching Bag'],
            ['name' => 'Ankle Weights'],
            
        ]);
    }
}
