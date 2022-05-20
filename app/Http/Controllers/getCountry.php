<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getCountry extends Controller
{
    public function index(){
        
        $conData = json_decode(file_get_contents('https://date.nager.at/api/v3/AvailableCountries'));
       
       return view('welcome')->with(['conData' => $conData]);
        
    }

    public function details($code,$name){
        $year = date('Y');
        $con_detail = json_decode(file_get_contents('https://date.nager.at/api/v3/CountryInfo/'.$code));
        $holidays   = json_decode(file_get_contents('https://date.nager.at/api/v3/PublicHolidays/'.$year.'/'.$code.''));
        $totalHolidays = count($holidays);
         $borderC = count($con_detail->borders);

         return view('details')->with([
             'year' => $year,
             'con_detail' => $con_detail,
             'holidays' => $holidays,
             'totalHolidays' => $totalHolidays,
             'borderC' => $borderC,
             'name'=>$name
            
            ]);
    }
}
