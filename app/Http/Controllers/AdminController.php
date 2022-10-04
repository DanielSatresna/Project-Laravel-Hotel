<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KamarData;
use App\Models\ReservasiData;
use App\Models\ServiceData;

class AdminController extends Controller
{ 

     
    public function TambahKamar(Request $request){

        $data = KamarData::create([
            'typekamar'=> $request->typekamar,
            'besarkamar'=> $request->besarkamar,
            'ukurankasur'=> $request->ukurankasur,
            'fasilitaskamar'=> $request->fasilitaskamar,
            'jumlahruangan'=> $request->jumlahruangan,
            'image'=> $request->image,
        ]);
        if($data){
            return redirect('/ruangan');
        }

    }
    
    public function getDataKamar(){
        $data = KamarData::all();
        return view('pages.ruangan', ['data' => $data]);
    
    }

    public function TambahService(Request $request){
        
        $data = ServiceData::create([
        'judul'=> $request->judul,
        'deskripsi'=> $request->deskripsi,
        'image'=> $request->image,
        ]);
        if($data){
        return redirect('/services');
    }   
    }

    public function getDataService(){
        $data = ServiceData::all();
        return view('pages.service', ['data' => $data]);
    }

    public function deleteData($id){
        KamarData::destroy($id);
        return redirect('/ruangan');
     }

     public function ubahService(Request $request, $id){
        
        $serviceUpdate=ServiceData::findOrFail($id);
        $serviceUpdate->judul=$request->judul;
        $serviceUpdate->deskripsi=$request->deskripsi;
        $serviceUpdate->image=$request->image;
        $serviceUpdate->save();

        return redirect('/services');

     }
     public function ubahServiceForm($id){
        $service=ServiceData::findOrFail($id);
        return view('pages.ubahService', ['service' => $service]);
     }

     public function ubahRuangan(Request $request, $id){
        
        $ruanganUpdate=KamarData::findOrFail($id);
        $ruanganUpdate->typekamar= $request->typekamar;
        $ruanganUpdate->besarkamar= $request->besarkamar;
        $ruanganUpdate->ukurankasur= $request->ukurankasur;
        $ruanganUpdate->fasilitaskamar= $request->fasilitaskamar;
        $ruanganUpdate->jumlahruangan= $request->jumlahruangan;
        if ($request->image) {
            $ruanganUpdate->image=$request->image;
        }
        $ruanganUpdate->save();

        return redirect('/ruangan');
     }

     public function ubahRuanganForm($id){
        $ruangan=KamarData::findOrFail($id);
        return view('pages.ubahRuangan', ['ruangan' => $ruangan]);
     }

     
}

   