<?php

use Illuminate\Database\Seeder;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(DB::table('sports')->get()->count() == 0){

            DB::table('sports')->insert([

                [
                    'name' => 'Baloncesto',
                    'description' => 'El baloncesto, basquetbol o básquetbol (del inglés basketball; de basket, "canasta", y ball, "pelota"), o simplemente básquet, es un deporte de dos equipos, formados por cinco jugadores cada uno, ellos tienen que intentar anotar puntos, también llamados canastas o dobles y/o triples introduciendo un balón en un aro colocado a 3,05 metros del suelo del que cuelga una red, lo que le da un aspecto de cesta o canasta.',
                    'img_path' => '/assets/images/sports/baloncesto.png',
                ],
                [
                    'name' => 'Balonmano',
                    'description' => 'El balonmano, handball o hándbol (términos procedentes del término alemán handball) es un deporte de pelota en el que se enfrentan dos equipos. Cada equipo se compone de siete jugadores (seis jugadores y un portero), pudiendo el equipo contar con otros siete jugadores reservas que pueden intercambiarse en cualquier momento con sus compañeros. Se juega en un campo rectangular, con una portería a cada lado del campo. El objetivo del juego es desplazar una pelota a través del campo, valiéndose fundamentalmente de las manos, para intentar introducirla dentro de la meta contraria, acción que se denomina gol. El equipo que marque más goles al concluir el partido, que consta de dos partes de treinta minutos, es el que resulta ganador, pudiendo darse también el empate.',
                    'img_path' => '/assets/images/sports/balonmano.png',
                ],
                [
                    'name' => 'Ciclismo',
                    'description' => 'El ciclismo es un deporte en el que se utiliza una bicicleta para recorrer circuitos al aire libre, en pista cubierta.',
                    'img_path' => '/assets/images/sports/bicicleta.png',
                ],
                [
                    'name' => 'Futbol 11',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/futbol11.png',
                ],
                [
                    'name' => 'Futbol 7',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/futbol7.png',
                ],
                [
                    'name' => 'Futbol 5',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/futbol5.png',
                ],
                [
                    'name' => 'Natacion',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/natacion.png',
                ],
                [
                    'name' => 'Padel',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/padel.png',
                ],
                [
                    'name' => 'Running',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/running.png',
                ],
                [
                    'name' => 'Senderismo',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/senderismo.png',
                ],
                [
                    'name' => 'Tenis',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/tenis.png',
                ],
                [
                    'name' => 'Voleibol',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/voleibol.png',
                ],

            ]);

        } else { echo "\e[31msports table already contains data"; 
            
        }//end sportsTableSeeder
    }
}
