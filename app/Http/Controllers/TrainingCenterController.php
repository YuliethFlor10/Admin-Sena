<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    public function index(){
        $trainings = Training_center::all();

        return view('training_center.index', compact('trainings'));
    }

    public function create(){
        return view('training_center.create');
    }

    public function store(Request $request){
        $training = new Training_center();
        $training->name=$request->name;
        $training->location=$request->location;
        $training->save();
        return redirect()->route('training.index');

    }
}
