<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actor::factory()
            ->count(5)
            ->has(Movie::factory()->count(3))
            ->create();
        //
    }
}
