<?php

use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Person::create([
          'id' => '1',
          'name' => 'Camilo Sampedro',
          'email' => 'anemail@myprovider.com',
          'city_id' => '2'
        ]);
        App\Person::create([
          'id' => '2',
          'name' => 'Daniela Narváez',
          'email' => 'daniela@narvaez.com',
          'city_id' => '1'
        ]);
        App\Person::create([
          'id' => '3',
          'name' => 'Juan Gil',
          'email' => 'gil@gil.com',
          'city_id' => '3'
        ]);
    }
}
