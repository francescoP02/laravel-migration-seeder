<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $company = [
            'Trenitalia',
            'Italo',
            'FrecciaRossa',
            'FrecciaArgento',
        ];

        Train::truncate();
        for ($i=0; $i < 20; $i++) { 

            $train = new Train();
            $train->company = $company[rand(0, count($company) - 1)];
            $train->departure_station = $faker->state();
            $train->arrival_station = $faker->state();
            $train->departure_time = $faker->datetime();
            $train->arrival_time = $faker->datetime();
            $train->train_number = $faker->randomDigitNotNull();
            $train->carriages = $faker->randomDigitNotNull();
            $train->is_on_time = $faker->boolean();
            $train->is_cancelled = $faker->boolean();
    
            $train->save();
        }

    }
}
