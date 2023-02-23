<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            Package::create([
                'experience_id' => Experience::all()->random(1)->first()?->id,
                'price' => mt_rand(100, 1000),
                'name' => fake()->name,
                'description' => fake()->text,
            ]);
        }
    }
}
