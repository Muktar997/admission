<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Entrycontroller extends Controller
{
    public function student_details(Request $request)
    {
        //dd($request);
        $student = new Student();
        $student->student_name = $request->name;
        $student->hsc_roll = $request->hsc_roll;
        $student->reg_number = $request->reg_no;
        $student->session = $request->year;
        $student->math = $request->math;
        $student->physics = $request->physics;
        $student->chemistry = $request->chemistry;
        $student->english = $request->english;
        $student->total_marks = $request->math+$request->physics+$request->chemistry+$request->english;
        $student->save();
        return back();
    }
    public function result()
    {
        $results = DB ::select("SELECT student_name,hsc_roll,total_marks FROM students ORDER BY total_marks DESC");
        dd($results);
        return view ('Result');
    }
}
