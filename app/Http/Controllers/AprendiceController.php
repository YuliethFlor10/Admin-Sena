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

    public function show($id)
    {
        $aprendice = Aprendice::find($id);

        return view('aprendice.show', compact('aprendice'));
    }

     //Destroy
     public function destroy (Aprendice $aprendice){

        $aprendice->delete();

        return redirect()->route('aprendice.index');
    }

      public function edit(Aprendice $aprendice){

        return view('aprendice.edit',compact('aprendice'));

      }

     //Update
    public function update(Request $request, Aprendice $aprendice){

        $aprendice->name = $request->name;
        $aprendice->email = $request->email;
        $aprendice->cell_number = $request->cell_number;
        $aprendice->save();

        return redirect()->route('aprendice.index');

      }

}
