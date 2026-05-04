<h2>Student List</h2>

<a href="{{ route('students.create') }}">Add Student</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->age }}</td>
        <td>
            <a href="{{ route('students.edit', $student) }}">Edit</a> |

            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete student?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>