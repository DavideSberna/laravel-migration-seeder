<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trains;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++){
            $newTrain = new Trains();
            $newTrain->azienda = 'Trenitalia';
            $newTrain->stazione_partenza = 'Milano Centrale';
            $newTrain->stazione_arrivo = 'Roma Termini';
            $newTrain->orario_partenza = '09:30:00';
            $newTrain->orario_arrivo = '11:30:00';
            $newTrain->codice_treno = '123';
            $newTrain->numero_carrozze = 5;
            $newTrain->in_orario = true;
            $newTrain->cancellato = false;

            $newTrain->save();

        }
    }
}
