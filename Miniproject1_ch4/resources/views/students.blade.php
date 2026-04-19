<h2>Student List</h2>
<ul>
    @foreach ($students as $student)
        <li>{{ $student }}</li>
    @endforeach
</ul>
