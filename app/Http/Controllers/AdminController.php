<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KamarData;

class AdminController extends Controller
{ 

     
    public function TambahKamar(Request $request){

        $data = KamarData::create([
            'typekamar'=> $request->typekamar,
            'besarkamar'=> $request->besarkamar,
            'ukurankasur'=> $request->ukurankasur,
            'fasilitaskamar'=> $request->fasilitaskamar,
        ]);
        if($data){
            return redirect('/ruangan');
        }

    }

}

   