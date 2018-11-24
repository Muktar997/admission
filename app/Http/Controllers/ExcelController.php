<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ExcelController extends Controller
{
    public function ExportClients()
    {
        Excel::create('clients',function($excel){
            $excel->sheet('clients',function ($sheet){
                $sheet->loadview('ExportClients');
            });
        })->export('xlsx');
    }
    public function upload()
    {
        return view('upload');
    }
    public function ImportClients()
    {
        $file = Input::file('file');
        $file->move(base_path('upls'),$file->getClientOriginalName());



        Excel::load(base_path('upls/' . $file->getClientOriginalName()), function ($reader) {

            foreach ($reader->toArray() as $row) {
                $std = new Student();
                $std->student_name = $row['name'];
                $std->hsc_roll = $row['hsc_roll'];
                $std->reg_number = $row['reg_no'];
                $std->session = $row['session'];
                $std->math = $row['math'];
                $std->physics = $row['physics'];
                $std->chemistry = $row['chemistry'];
                $std->english = $row['english'];

                $total = (int)$row['physics'] + (int)$row['math'] + (int)$row['chemistry'] + (int)$row['english'];
                $std->total_marks = $total;
                $std->save();

                $results = DB::select("SELECT id,student_name,hsc_roll,total_marks FROM students ORDER BY total_marks DESC,math DESC,physics DESC,chemistry DESC,english DESC");

                $i=1;
                foreach ($results as $student) {
                    $cur_student=Student::find($student->id);
                    $cur_student->Merit_position=$i;
                    $cur_student->save();
                    $i++;
                }
                //echo var_dump($row);
            }
        });

        return redirect("result");
    }
}
