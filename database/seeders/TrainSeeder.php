<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {
            $train = new Train();
            $train->agency = $faker->randomElement(['italo', 'frecciarossa']);
            $train->start_station = $faker->city;
            $train->end_station = $faker->city;
            $train->departure_time = $faker->time('H:i');
            $train->arrive_time = $faker->time('H:i');
            $train->train_code = $faker->bothify('???##?');
            $train->carriage = $faker->randomDigitNotNull();
            $train->is_in_time = $faker->randomElement([true, false]);
            $train->is_delete = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}
