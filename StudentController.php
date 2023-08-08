<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = \DB::table("students")->get();
        return view('Students.index', [
            'student' => $student,
        ]);
    }

    public function create()
    {
        return view('students.create');
    }


    public function store(Request $request)
    {
        $student = new Student();
        $student ->Name = $request->input('Name');
        $student ->age = $request->input('age');
        $student ->address = $request->input('address');
        $student ->telephone = $request->input('telephone');

        $student -> save();
        return redirect('/students');
    }
    public function update(Request $request, $id)
    {
        $student = Student::where('id',$id)
            ->update([
                'name' =>$request->input('name'),
                'password'=>$request->input('password'),
                'email' => $request->input('email'),
            ]);
        return redirect('/student.index');
    }

    public function destroy($id)
    {
        $student = Student::Find($id);
        $student -> delete();
        return redirect('/student.index');
    }


}
