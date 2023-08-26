<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Creo i tag dentro un array e lo inserisco all'interno di una variabile */
        $tecnologies = ['HTML', 'CSS', 'Javascript', 'JQuery', 'MySQL', 'VueJS', 'Lavarel', 'Symfony', 'PHP', 'React'];
    }
}
