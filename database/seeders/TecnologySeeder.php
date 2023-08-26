<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
        $techs = ['HTML', 'CSS', 'Javascript', 'JQuery', 'MySQL', 'VueJS', 'Lavarel', 'Symfony', 'PHP', 'React', 'SASS', 'SCSS'];

        foreach ($techs as $tech) {
            $new_tech = new Tecnology();

            $new_tech->name = $tech;
            $new_tech->slug = Str::slug($tech, '-');

            $new_tech->save();
        }
    }
}
