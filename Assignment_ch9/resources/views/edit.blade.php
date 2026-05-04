<h2>Edit Student</h2>

<form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')

    Name:
    <input type="text" name="name" value="{{ $student->name }}" required>
    <br><br>

    Email:
    <input type="email" name="email" value="{{ $student->email }}" required>
    <br><br>

    Age:
    <input type="number" name="age" value="{{ $student->age }}" required>
    <br><br>

    <button type="submit">Update Student</button>
</form>

<a href="{{ route('students.index') }}">Back</a>