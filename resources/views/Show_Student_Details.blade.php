@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Name</th>
                <th scope="col">HSC Roll</th>
                <th scope="col">Registration Number</th>
                <th scope="col">Session</th>
                <th scope="col">Mathematics</th>
                <th scope="col">Physics</th>
                <th scope="col">Chemistry</th>
                <th scope="col">English</th>
                <th scope="col">Total Marks</th>
                <th scope="col">Merit Position</th>
            </tr>
            </thead>
            <tbody>
            @foreach($student_details as $student)

                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->student_name}}</td>
                    <td>{{$student->hsc_roll}}</td>
                    <td>{{$student->reg_number}}</td>
                    <td>{{$student->session}}</td>
                    <td>{{$student->math}}</td>
                    <td>{{$student->physics}}</td>
                    <td>{{$student->chemistry}}</td>
                    <td>{{$student->english}}</td>
                    <td>{{$student->total_marks}}</td>
                    <td>{{$student->Merit_position}}</td>

                </tr>
            @endforeach
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
