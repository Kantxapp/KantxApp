<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('provinces')->insert([
            [
                'id' => 1,
                'name' => 'Alava',
            ],
            [
                'id' => '2',
                'name' => 'Albacete',
            ],
            [
                'id' => '3',
                'name' => 'Alicante',
            ],
            [
                'id' => '4',
                'name' => 'Almeria',
            ],
            [
                'id' => '33',
                'name' => 'Asturias',
            ],
            [
                'id' => '5',
                'name' => 'Avila',
            ],
            [
                'id' => '6',
                'name' => 'Badajoz',
            ],
            [
                'id' => '8',
                'name' => 'Barcelona',
            ],
            [
                'id' => '9',
                'name' => 'Burgos',
            ],
            [
                'id' => '10',
                'name' => 'Caceres',
            ],
            [
                'id' => '11',
                'name' => 'Cadiz',
            ],
            [
                'id' => '39',
                'name' => 'Cantabria',
            ],
            [
                'id' => '12',
                'name' => 'Castellon',
            ],
            [
                'id' => '51',
                'name' => 'Ceuta',
            ],
            [
                'id' => '13',
                'name' => 'Ciudad Real',
            ],
            [
                'id' => '14',
                'name' => 'Cordoba',
            ],
            [
                'id' => '15',
                'name' => 'Coruña, A',
            ],
            [
                'id' => '16',
                'name' => 'Cuenca',
            ],
            [
                'id' => '17',
                'name' => 'Girona',
            ],
            [
                'id' => '18',
                'name' => 'Granada',
            ],
            [
                'id' => '19',
                'name' => 'Guadalajara',
            ],
            [
                'id' => '20',
                'name' => 'Guipuzcoa',
            ],
            [
                'id' => '21',
                'name' => 'Huelva',
            ],
            [
                'id' => '22',
                'name' => 'Huesca',
            ],
            [
                'id' => '22',
                'name' => 'Huesca',
            ],
            [
                'id' => '7',
                'name' => 'Illes Balears',
            ],
            [
                'id' => '23',
                'name' => 'Jaen',
            ],
            [
                'id' => '24',
                'name' => 'Leon',
            ],
            [
                'id' => '25',
                'name' => 'Lleida',
            ],
            [
                'id' => '27',
                'name' => 'Lugo',
            ],
            [
                'id' => '28',
                'name' => 'Madrid',
            ],
            [
                'id' => '29',
                'name' => 'Malaga',
            ],
            [
                'id' => '52',
                'name' => 'Melilla',
            ],
            [
                'id' => '30',
                'name' => 'Murcia',
            ],
            [
                'id' => '31',
                'name' => 'Navarra',
            ],
            [
                'id' => '32',
                'name' => 'Ourense',
            ],
            [
                'id' => '34',
                'name' => 'Palencia',
            ],
            [
                'id' => '35',
                'name' => 'Palmas, Las',
            ],
            [
                'id' => '36',
                'name' => 'Pontevedra',
            ],
            [
                'id' => '26',
                'name' => 'Rioja, La',
            ],
            [
                'id' => '37',
                'name' => 'Salamanca',
            ],
            [
                'id' => '38',
                'name' => 'Santa Cruz De Tenerife',
            ],
            [
                'id' => '40',
                'name' => 'Segovia',
            ],
            [
                'id' => '41',
                'name' => 'Sevilla',
            ],
            [
                'id' => '42',
                'name' => 'Soria',
            ],
            [
                'id' => '43',
                'name' => 'Tarragona',
            ],
            [
                'id' => '44',
                'name' => 'Teruel',
            ],
            [
                'id' => '45',
                'name' => 'Toledo',
            ],
            [
                'id' => '46',
                'name' => 'Valencia',
            ],
            [
                'id' => '47',
                'name' => 'Valladolid',
            ],
            [
                'id' => '48',
                'name' => 'Vizcaya',
            ],
            [
                'id' => '49',
                'name' => 'Zamora',
            ],
            [
                'id' => '50',
                'name' => 'Zaragoza',
            ],
            ]);
    }
}