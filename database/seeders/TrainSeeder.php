<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->Azienda = $faker->name();
            $newTrain->Stazione_Partenza = $faker->city();
            $newTrain->Stazione_Arrivo = $faker->city();
            $newTrain->Orario_Partenza = $faker->dateTimeBetween();
            $newTrain->Orario_Arrivo = $faker->dateTimeBetween();
            $newTrain->Codice_Treno = $faker->ean8();
            $newTrain->Numero_carrozze = $faker->numberBetween(3, 6);
            $newTrain->In_orario = $faker->boolean();
            $newTrain->Cancellato = $faker->boolean();
    
    
            // dd($newTrain);
    
            $newTrain->save();

        }
        //


    }
}
