<?php
namespace App\Traits;
use DB;
trait Get_provinces
{
    public function getProvinces()
    {
        $provinces=DB::table('provinces')
                        ->orderBy('name')
                        ->get();
        return $provinces;
    }
}