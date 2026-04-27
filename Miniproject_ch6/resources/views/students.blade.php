<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

<h2>Student List</h2>

<ul>
    @foreach($students as $student)
        <li>
            Name: {{ $student['name'] }} | Age: {{ $student['age'] }}
        </li>
    @endforeach
</ul>

</body>
</html>