<?php

use Illuminate\Database\Seeder;

class PanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Panic::create([
          'id' => '1',
          'person_id' => '1',
          'latitude' => 17.50,
          'longitude' => 15.24,
          'city_id' => '2'
        ]);
        App\Person::create([
          'id' => '2',
          'person_id' => '2',
          'latitude' => 17.50,
          'longitude' => 15.24,
          'city_id' => '1'
        ]);
    }
}
