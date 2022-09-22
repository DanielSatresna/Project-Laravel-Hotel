<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KamarData;

class TamuController extends Controller
{
    public function getDataKamar(){
        $data = KamarData::all();
        return view('pages.ruagan');
    }
}
