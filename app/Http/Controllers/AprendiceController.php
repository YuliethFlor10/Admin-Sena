<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendice;

class AprendiceController extends Controller
{
    public function index(){
        $aprendices = Aprendice::all();

        return view('aprendice.index', compact('aprendices'));
    }


    public function create(){
        return view('aprendice.create');
    }

    public function store(Request $request){
        $aprendice = new Aprendice();
        $aprendice->cell_number=$request->cell_number;
        $aprendice->name=$request->name;
        $aprendice->email=$request->email;
        $aprendice->save();
        return redirect()->route('aprendice.index');


    }
}
