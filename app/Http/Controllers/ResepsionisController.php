<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ReservasiData;

class ResepsionisController extends Controller
{
    public function resepsionis(){
        $pull=ReservasiData::all();
        return view('pages.reptampil', ['pull'=>$pull]);
    }

    public function search(Request $request){
        $searchResult = $request->search;
        $result=ReservasiData::where('nama','like',"%".$searchResult."%")->paginate();
        return view('pages.reptampil',['pull' => $result]);
    }

    public function searchDate(Request $request){
        $searchResult = $request->searchDate;
        $result=ReservasiData::where('cekin', $searchResult)->paginate();
        return view('pages.reptampil',['pull' => $result]);
    }
}