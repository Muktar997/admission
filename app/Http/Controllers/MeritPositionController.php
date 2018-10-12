<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeritPositionController extends Controller
{
    //
    public function result()
    {
        $results = DB ::select("SELECT id,student_name,hsc_roll,total_marks FROM students ORDER BY total_marks DESC,math DESC,physics DESC,chemistry DESC,english DESC");
        //dd($results);
        return view ('Result',compact('results'));
    }
}
