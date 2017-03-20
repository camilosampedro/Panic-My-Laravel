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
          'name' => 'Medellín'
        ]);
        App\City::create([
          'id' => 2,
          'name' => 'Envigado'
        ]);
        App\City::create([
          'id' => 3,
          'name' => 'Sabaneta'
        ]);
        App\City::create([
          'id' => 4,
          'name' => 'Bello'
        ]);
    }
}
