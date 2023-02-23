<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CharterType;
use App\Models\Vendor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TypeSeeder::class,
            TripTypeSeeder::class,
            CharterTypeSeeder::class,
            DepartureSeeder::class,
            VendorSeeder::class,
            ExperienceSeeder::class,
            PackageSeeder::class,
        ]);
    }
}
