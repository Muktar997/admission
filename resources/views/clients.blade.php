<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>clients</title>
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>HSC Roll</th>
        <th>Reg_NO</th>
        <th>Session</th>
        <th>Mathematics</th>
        <th>Physics</th>
        <th>Chemistry</th>
        <th>English</th>
    </tr>
    @foreach($clients as $student)

        <tr>
            <td>{{$student->student_name}}</td>
            <td>{{$student->hsc_roll}}</td>
            <td>{{$student->reg_number}}</td>
            <td>{{$student->session}}</td>
            <td>{{$student->math}}</td>
            <td>{{$student->physics}}</td>
            <td>{{$student->chemistry}}</td>
            <td>{{$student->english}}</td>

        </tr>
    @endforeach
</table>
</body>
</html>

