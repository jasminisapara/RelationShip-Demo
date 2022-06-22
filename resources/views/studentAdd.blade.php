<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Query Builder</title>
</head>
<body>
    <form method="POST" action="{{ route('student.store') }}">
        @csrf
        <label>Name</label>
        <input type="text" name="name"><br><br>
        <label>Email</label>
        <input type="email" name="email"><br><br>
        <label>Phone_No</label>
        <input type="text" name="phone"><br><br>
        <input type="submit">

    </form>
</body>
</html>