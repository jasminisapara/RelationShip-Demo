<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Students</title>
</head>
<body>
    <table border="2" align="center">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Marks</th>
            <th>Delete</th>
            <th>Edit</th>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        @foreach ($student->result as $result)
                            {{$result->marks}}%
                            <br>
                        @endforeach
                    </td>
                    <td><a href="{{ route('student.delete',$student->id)}}">Delete</a></td>
                    <td><a href="{{ route('student.edit',$student->id)}}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>    
</body>
</html>