<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKamar;
use App\Models\DataFasilitas;

class AdminController extends Controller
{
    public function TambahKamar(Request $request){

        $data = DataKamar::create([
            'tipekamar'=> $request->tipekamar,
            'besarkamar'=> $request->besarkamar,
            'fasilitaskamar'=> $request->fasilitaskamar,
            'jumlahkamar'=> $request->jumlahkamar,
            'image'=> $request->image,
        ]);

        if($data){
            return redirect('/rooms');
        }
    }

    public function GetDataKamar(){
        $data = DataKamar::all();
        return view('pages.rooms', ['data' => $data]);
    }

    public function EditKamar(Request $request, $id){
        
        $updateRuangan=DataKamar::findOrFail($id);
        $updateRuangan->tipekamar= $request->tipekamar;
        $updateRuangan->besarkamar= $request->besarkamar;
        $updateRuangan->fasilitaskamar= $request->fasilitaskamar;
        $updateRuangan->jumlahkamar= $request->jumlahkamar;
        if ($request->image) {
            $updateRuangan->image= $request->image;
        }
        $updateRuangan->save();

        return redirect('/rooms');
    }

    public function EditKamarForm($id){
        $kamar=DataKamar::findOrFail($id);
        return view('pages.editKamar', ['kamar' => $kamar]);
    }

    public function TambahFasilitas(Request $request){

        $data = DataFasilitas::create([
            'namafasilitas'=> $request->namafasilitas,
            'deskfasilitas'=> $request->deskfasilitas,
            'image'=> $request->image,
        ]);
        if($data)
        return redirect('/fasilitas');
    }

    public function GetDataFasilitas(){
        $data = DataFasilitas::all();
        return view('pages.fasilitas', ['data' => $data]);
    }

    public function EditFasilitas(Request $request, $id){

        $updateFasilitas = DataFasilitas::findOrFail($id);
        $updateFasilitas->namafasilitas= $request->namafasilitas;
        $updateFasilitas->deskfasilitas= $request->deskfasilitas;
        if ($request->image){
            $updateFasilitas->image= $request->image;
        }
        $updateFasilitas->save();

        return redirect('/fasilitas');
    }

    public function EditFasilitasForm($id){

        $fasilitas = DataFasilitas::findOrFail($id);
        return view('pages.editFasilitas', ['fasilitas' => $fasilitas]);
    }





    public function deleteDataKamar($id){
        DataKamar::destroy($id);
        return redirect('/rooms');
    }

    public function deleteDataFasilitas($id){
        DataFasilitas::destroy($id);
        return redirect('/fasilitas');
    }
}
