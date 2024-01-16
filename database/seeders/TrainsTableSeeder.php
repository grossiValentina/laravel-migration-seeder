<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $train = new Train();
        $train->azienda = $faker->randomElement(['Italo', 'Trenitalia']);
        $train->stazione_di_partenza = $faker->city();
        $train->stazione_di_arrivo = $faker->city();
        $train->orario_di_partenza = $faker->time();
        $train->orario_di_arrivo = $faker->time();
        $train->codice_treno = $faker->ean8();
        $train->numero_carrozze = $faker->randomDigitNotNull();
        $train->cancellato = $faker->boolean();

        $train->save();
    }
}
