<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regionKantoId = Region::query()->where('title', 'Kanto')->value('id');
        Location::query()->create(['title' => 'Volcano', 'region_id' => $regionKantoId]);
        Location::query()->create(['title' => 'Cinnabar Gym', 'region_id' => $regionKantoId]);
        Location::query()->create(['title' => 'Mansion', 'region_id' => $regionKantoId]);
        Location::query()->create(['title' => 'Cinnabar Lab', 'region_id' => $regionKantoId]);


        $regionHoennId = Region::query()->where('title', 'Hoenn')->value('id');
        Location::query()->create(['title' => 'Some other location', 'region_id' => $regionHoennId]);
    }
}
