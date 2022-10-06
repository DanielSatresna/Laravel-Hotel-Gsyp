<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataReservasi;

class ResepsionisController extends Controller
{
   public function Resepsionis(){
    $data = DataReservasi::all();
    return view('pages.Reservasi', ['data' => $data]);
   }

   public function Search(Request $request){
    $searchResult = $request->search;
    $result=DataReservasi::where('name','like',"%".$searchResult."%")->paginate();
    return view('pages.Reservasi',['data' => $result]);
   }

   public function SearchDate(Request $request){
    $searchResult = $request->searchDate;
    $result=Datareservasi::where('cekin', $searchResult)->paginate();
    return view('pages.Reservasi',['data' => $result]);
}


  
}
