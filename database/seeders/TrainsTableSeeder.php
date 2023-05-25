<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\Trains;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {


        for($i = 0; $i < 50; $i++){

            $newTrain = new Trains();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->streetName();
            $newTrain->stazione_arrivo = $faker->streetName();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(3, false);
            $newTrain->numero_carrozze = $faker->randomDigitNot(0);
            $newTrain->in_orario = $faker->randomElement([true, false]);
            $newTrain->cancellato = $faker->randomElement([true, false]);
            $newTrain->prezzo = $faker->randomFloat(2, 4, 40);
            $newTrain->km = $faker->randomFloat(1, 4, 200);
            $newTrain->save();

        }
    }

    public function randomBool()
    {
        return random_int(0, 1);
    }
}
