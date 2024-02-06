<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = config("technologies");

        foreach ($technologies as $item) {
            $new_technology = new Technology();

            $new_technology->fill($item);
            $new_technology->save();
        }
    }
}
