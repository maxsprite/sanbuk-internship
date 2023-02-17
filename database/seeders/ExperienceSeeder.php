<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [1, 2, 3];

        for ($i = 0; $i < 20; $i++) {
            Experience::create([
                'departure_id' => $types[mt_rand(1, 3)],
            ]);
        }
    }
}
