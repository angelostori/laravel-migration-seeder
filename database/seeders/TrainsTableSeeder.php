<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();;
            $newTrain->landing_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->landing_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->code_comp = strtoupper($faker->lexify('??'));
            $newTrain->code_train = $faker->randomNumber(5, true);
            $newTrain->carriages = $faker->numberBetween(6, 12);
            $newTrain->platform = $faker->numberBetween(1, 30);

            $isOnTime = $faker->boolean(80);
            $newTrain->is_on_time = $isOnTime;

            $newTrain->delay = $isOnTime ? 0 : $faker->numberBetween(5, 120);

            $newTrain->is_aborted = $isOnTime ? 0 : $faker->boolean(10);

            $newTrain->save();
        }
    }
}
