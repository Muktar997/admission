 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Export</title>
    </head>
    <body>
    <table>
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
    </table>
    </body>
    </html>


    <!--</div>
@endsection-->
