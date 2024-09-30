<?php

namespace App\Http\Controllers;

use App\Models\komentar;
use Illuminate\Http\Request;

class komenController extends Controller
{

    public function page(){
        return view('index');
    }
    //
    public function komentar (Request $request){
    $this->validate($request,[
        'nama' => 'required|string|max:50',
        'email' => 'required|string|email|max:255|unique:users',
        'tentang'=> 'required|string|max:20',
        'isipesan'=>'required|string|max:300'
    ]);
    
    $postcoment = new komentar([
        'nama'=> $request->input('nama'),
        'email'=>$request->input('email'),
        'tentang'=>$request->input('tentang'),
        'isipesan'=>$request->input('isipesan'),
    ]);

    $postcoment->save();
    
}
}
