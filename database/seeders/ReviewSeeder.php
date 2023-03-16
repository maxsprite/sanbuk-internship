<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            Review::create([
                'user_id' => User::all()->random(1)->first()->id,
                'body' => fake()->realText,
                'model_id' => User::all()->random(1)->first()->id,
                'model_type' => User::class,
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            Review::create([
                'user_id' => User::all()->random(1)->first()->id,
                'body' => fake()->realText,
                'model_id' => Experience::all()->random(1)->first()->id,
                'model_type' => Experience::class,
            ]);
        }
    }
}
