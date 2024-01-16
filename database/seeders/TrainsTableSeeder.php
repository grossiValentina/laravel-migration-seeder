<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
        $train->azienda = 'Carli';
        $train->stazione_di_partenza = 'Roma';
        $train->stazione_di_arrivo = 'Milano';
        $train->orario_di_partenza = '8:00';
        $train->orario_di_arrivo = '13:00';
        $train->codice_treno = '13298';
        $train->numero_carrozze = 14;
        $train->cancellato = 0;

        $train->save();
    }
}
