<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class MeritPositionController extends Controller
{
    //
    public function result()
    {
        //$results = DB ::select("SELECT id,student_name,hsc_roll,total_marks FROM students ORDER BY total_marks DESC,math DESC,physics DESC,chemistry DESC,english DESC");
        //dd($results);
       // return view ('Result',compact('results'));
        $student_details = DB ::select("SELECT id,student_name,hsc_roll,Merit_position FROM students ORDER BY id");
        $pdf = PDF::loadView('Result', compact('student_details'));
        return $pdf->download('Result.pdf');
        //return view ('Result',compact('student_details'));
    }
}
