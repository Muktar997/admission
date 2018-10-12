<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowStudentDetailsController extends Controller
{
    //
    public function details()
    {
        $student_details = DB ::select("SELECT id,student_name,hsc_roll,reg_number,session,math,physics,chemistry,english,total_marks FROM students ORDER BY id");
        return view ('Show_Student_Details',compact('student_details'));
    }
}
