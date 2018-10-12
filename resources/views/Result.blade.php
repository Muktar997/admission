@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">STUDENT ID</th>
                <th scope="col">NAME</th>
                <th scope="col">HSC ROLL</th>
                <th scope="col">MERIT POSITION</th>
            </tr>
            </thead>
            <tbody>

            {{$i = 1}}
                @foreach($results as $res)

                <tr>
                    <td>{{$res->id}}</td>
                    <td>{{$res->student_name}}</td>
                    <td>{{$res->hsc_roll}}</td>
                    <td>{{$i++}}</td>
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
