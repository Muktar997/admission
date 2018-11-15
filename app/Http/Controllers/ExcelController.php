<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
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
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('uploads',$file_name));
        Excel::load(Input::file(public_path('uploads/' . $file_name)), function ($reader) {

            foreach ($reader->toArray() as $row) {
                echo $row;
            }
        });

        return "";
    }
}
