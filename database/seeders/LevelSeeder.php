<?php

namespace Database\Seeders;

use App\Models\Levels;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Levels::create([
            'name' => 'Nivél básico'
        ]);
        Levels::create([
            'name' => 'Nivél intermedio'
        ]);
        Levels::create([
            'name' => 'Nivél avanzado'
        ]);
        Levels::create([
            'name' => 'Nivél master'
        ]);
    }
}
