<h1>Edit Student</h1>

<form method="POST" action="{{ route('students.update', $student->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $student->name }}">

    <select name="class_model_id">
        @foreach($classes as $class)
            <option value="{{ $class->id }}"
                {{ $student->class_model_id == $class->id ? 'selected' : '' }}>
                {{ $class->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">Update</button>
</form>