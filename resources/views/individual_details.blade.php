@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Admission Roll</th>
                <th scope="col">NAME</th>
                <th scope="col">HSC ROLL</th>
                <th scope="col">MERIT POSITION</th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$student_details[0]->id}}</td>
                    <td>{{$student_details[0]->student_name}}</td>
                    <td>{{$student_details[0]->hsc_roll}}</td>
                    <td>{{$student_details[0]->Merit_position}}</td>
                </tr>

            </tbody>
            <!--<tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>-->
        </table>
    </div>
@endsection
