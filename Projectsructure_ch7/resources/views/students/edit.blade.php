<h1>Edit Student</h1>

<form method="POST" action="/students/{{ $student->id }}">
    @csrf
    @method('PUT')

    Name: <input type="text" name="name" value="{{ $student->name }}"><br>
    Email: <input type="email" name="email" value="{{ $student->email }}"><br>
    Age: <input type="number" name="age" value="{{ $student->age }}"><br>

    <button type="submit">Update</button>
</form>