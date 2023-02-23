<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 
use App\Models\Train as Train;

class InfoTrains extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $train = config('trains');
        // 'trains' è un file in config che ha un array

        for($i=0; $i<=10; $i++){
            $newTrain = new Train();
            // $newTrain->azienda = $train['titolo']
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_partenza = $faker->word();
            $newTrain->stazione_arrivo = $faker->word();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->word();
            $newTrain->numero_carrozze = $faker->numberBetween(1, 20);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();

        }
    }
}
