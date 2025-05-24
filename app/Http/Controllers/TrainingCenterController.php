<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    public function index(){
        $trainings = Training_center::all();

        return view('training.index', compact('trainings'));
    }

    public function create(){
        return view('training.create');
    }

    public function store(Request $request){
        $training = new Training_center();
        $training->name=$request->name;
        $training->location=$request->location;
        $training->save();
        return redirect()->route('training.index');

    }
    public function show($id)
    {
        $training = Training_center::find($id);

        return view('training.show', compact('training'));
    }

    //Destroy
     public function destroy (Training_center $training){

        $training->delete();

        return redirect()->route('training.index');
    }

      public function edit(Training_center $training){

        return view('training.edit',compact('training'));

      }

     //Update
    public function update(Request $request, Training_center $training){

        $training->name = $request->name;
        $training->location=$request->location;
        $training->save();

        return redirect()->route('training.index');

      }
}
