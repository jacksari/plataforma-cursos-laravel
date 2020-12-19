<?php

namespace Database\Seeders;

use App\Models\Platforms;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platforms::create([
            'name' => 'Youtube'
        ]);
        Platforms::create([
            'name' => 'Vimeo'
        ]);
    }
}
