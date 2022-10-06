<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataReservasi;
use App\Models\DataKamar;

class TamuController extends Controller
{
    public function PesanKamar(Request $request, $id){

        $data = DataReservasi::create([

            'name'=> $request->name,
            'tipekamar'=> $request->tipekamar,
            'email'=> $request->email,
            'nik'=> $request->nik,
            'cekin'=> $request->cekin,
            'cekout'=> $request->cekout,
            'jumlahkamar'=> $request->jumlahkamar,
        ]);

        $decrement=DataKamar::findOrFail($id)->decrement('jumlahkamar', $request->jumlahkamar);

        if($data)
         return redirect('/rooms');
    }

    public function GetDataReservasi($id){
        $data = DataKamar::findOrFail($id);
        return view('pages.pesanKamar', ['data' => $data]);
    }

    public function BuktiPemesanan(){
        $data = DataReservasi::all();
        return view('pages.buktiPemesanan', ['data' => $data]);
    }


}
