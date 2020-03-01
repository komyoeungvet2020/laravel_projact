<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create();
    for ($j = 0; $j < 10; $j++) {
      DB::table('students')->insert([
        'FirstName' => $faker->firstName,
        'LastName' => $faker->lastName,
        'age' => $faker->numberBetween($min = 15, $max = 25)
      ]);
    }
  }
}
