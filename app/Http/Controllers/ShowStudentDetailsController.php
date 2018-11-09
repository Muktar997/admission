<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowStudentDetailsController extends Controller
{
    //
    public function details()
    {
        $student_details = DB ::select("SELECT * FROM students ORDER BY id");
        return view ('Show_Student_Details',compact('student_details'));
    }
    public function individual(Request $request)
    {
        $student_details = DB ::select("SELECT * FROM students WHERE id='$request->roll'AND hsc_roll='$request->hsc_roll' AND reg_number='$request->reg_no'");
        return view ('individual_details',compact('student_details'));
    }
}
