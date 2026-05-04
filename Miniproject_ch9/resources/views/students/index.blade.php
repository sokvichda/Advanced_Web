<h1>Student List</h1>

<a href="{{ route('students.create') }}">Add Student</a>

<ul>
@foreach($students as $student)
    <li>
        {{ $student->name }} (Class: {{ $student->classModel->name }})
        <a href="{{ route('students.edit', $student->id) }}">Edit</a>

        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
@endforeach
</ul>