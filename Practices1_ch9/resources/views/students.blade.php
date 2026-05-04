<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

<h2>Student List</h2>

<a href="/add-student">Add Student</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
    </tr>

    @foreach($students as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->email }}</td>
        <td>{{ $s->age }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>