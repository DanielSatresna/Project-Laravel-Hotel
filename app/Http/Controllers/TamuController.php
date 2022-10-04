<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KamarData;
use App\Models\ReservasiData;

class TamuController extends Controller
{
    public function PesanKamar($id, Request $request){

        $data = ReservasiData::create(
            [
                'nama'=> $request->nama,
                'typekamar'=> $request->typekamar,
                'nik' => $request->nik,
                'email'=> $request->email,
                'cekin'=> $request->cekin,
                'cekout'=> $request->cekout,
                'jumlah'=> $request->jumlah,
        
            ]
        );

        $decrement=KamarData::findorFail($id)->decrement('jumlahruangan', $request->jumlah);

        if($data){
            return redirect('/ruangan');
        }
    
       }
       public function getDataReservasi($id){
        $data = KamarData::findOrFail($id);
        return view('pages.pesanKamar', ['data' => $data]);
    }

    public function buktiPemesanan(){
        $data = ReservasiData::all();
        return view('pages.buktiPemesanan', ['data'=>$data]);
    }
    
}
