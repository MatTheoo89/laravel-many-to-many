<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 200; $i++) { 
            $project = Project::inRandomOrder()->first();

            $tecnology_id = Technology::inRandomOrder()->first()->id;

            $project->technologies()->attach($tecnology_id);
        }
    }
}
