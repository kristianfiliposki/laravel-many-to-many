<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use App\Models\Project;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for ($i = 1; $i <= 5; $i++) {

        // }

        $project1 = Project::find(1);
        $project2 = Project::find(2);
        $project3 = Project::find(3);
        $project4 = Project::find(4);
        $project5 = Project::find(5);
        // $technology = Technology::find(1);
        $project1->technologies()->attach([3, 4]);
        $project2->technologies()->attach(2);
        $project3->technologies()->attach([3, 4]);
        $project4->technologies()->attach(1);
        $project5->technologies()->attach(4);
    }
}
