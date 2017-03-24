<?php

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\City::create([
          'id' => 1,
          'min_latitude' => 5.1515,
          'max_latitude' => 7.1242,
          'min_longitude' => 10.1515,
          'max_latitude' => 12.1242,
          'name' => 'Medellín'
        ]);
        App\City::create([
          'id' => 2,
          'min_latitude' => 64.8450,
          'max_latitude' => 111.5783,
          'min_longitude' => 70.8450,
          'max_latitude' => 100.5614,
          'name' => 'Envigado'
        ]);
        App\City::create([
          'id' => 3,
          'min_latitude' => 9.2261,
          'max_latitude' => 21.8869044,
          'min_longitude' => 25.1515,
          'max_latitude' => 23.1242,
          'name' => 'Sabaneta'
        ]);
        App\City::create([
          'id' => 4,
          'min_latitude' => 97.1515,
          'max_latitude' => 81.1242,
          'min_longitude' => 103.1515,
          'max_latitude' => 90.1242,
          'name' => 'Bello'
        ]);
    }
}
