<?php

use Illuminate\Database\Seeder;

class KantxasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kantxaMattigoxotegi = DB::table('kantxas')->insert([
            'name' => 'Mattigoxotegi Udal Futbol Zelaia',
            'streetNumber' => '48',
            'route' => 'Sibilia Kalea',
            'locality' => 'Donostia',
            'province' => 'Gipuzkoa',
            'formatedAddress' => 'Sibilia Kalea, 48, 20012 Donostia, Gipuzkoa, Spain',
            'lat' => '43.319501',
            'lng' => '-1.9640036',
            'KantxaPic' => '/storage/kantxas/mattigoxotegi.jpg',
            'place_id' => 'ChIJg0N2hGalUQ0RSnIVCTAhBZQ'
        ]);
        $kantxaMichelin = DB::table('kantxas')->insert([
            'name' => 'Donostia Arena',
            'streetNumber' => '9',
            'route' => 'Miramon Ibilbidea',
            'locality' => 'Donostia',
            'province' => 'Gipuzkoa',
            'formatedAddress' => 'Miramon Ibilbidea, 9, 20009 Donostia, Gipuzkoa, Spain',
            'lat' => '43.2976169',
            'lng' => '-1.9685681',
            'KantxaPic' => '/storage/kantxas/arena.jpg',
            'place_id' => 'ChIJ-TcsrZSvUQ0RjZe7Rwh_nDM'
        ]);
        $kantxaRealTenis = DB::table('kantxas')->insert([
            'name' => 'Real Club de Tenis de San Sebastián',
            'streetNumber' => '9',
            'route' => 'Eduardo Chillida Pasealekua',
            'locality' => 'Donostia',
            'province' => 'Gipuzkoa',
            'formatedAddress' => 'Eduardo Chillida Pasealekua, 9, 20008 Donostia, Gipuzkoa, Spain',
            'lat' => '43.3197725',
            'lng' => '-2.0050103',
            'KantxaPic' => '/storage/kantxas/real.jpg',
            'place_id' => 'ChIJdRp3rKO6UQ0RbIz4gQF6vsQ'
        ]);
    }
}

