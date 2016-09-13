<?php

use Illuminate\Database\Seeder;
use App\Kategorie;

class KategorienSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategorie::create([
            'kz' => 'A',
            'kategorie' => 'Zu dokumentierende Leistungen'
        ]);

        Kategorie::create([
            'kz' => 'D',
            'kategorie' => 'Codierung von Leistungen'
        ]);

        Kategorie::create([
            'kz' => 'E',
            'kategorie' => 'Codierung von Leistungen zur Fachkompetenz'
        ]);
    }

}
