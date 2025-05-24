<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all();

        return view('teacher.index', compact('teachers'));
    }


    public function create(){
        return view('teacher.create');
    }

    public function store(Request $request){
        $teacher = new Teacher();
        $teacher->name=$request->name;
        $teacher->email=$request->email;
        $teacher->save();
        return redirect()->route('teacher.index');

    }
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('teacher.show', compact('teacher'));
    }

    //Destroy
     public function destroy (Teacher $teacher){

        $teacher->delete();

        return redirect()->route('teacher.index');
    }

      public function edit(Teacher $teacher){

        return view('teacher.edit',compact('teacher'));

      }

     //Update
    public function update(Request $request, Teacher $teacher){

        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->save();

        return redirect()->route('teacher.index');

      }
}
