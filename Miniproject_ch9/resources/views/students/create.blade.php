<h1>Add Student</h1>

<form method="POST" action="{{ route('students.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Student Name">

    <select name="class_model_id">
        @foreach($classes as $class)
            <option value="{{ $class->id }}">{{ $class->name }}</option>
        @endforeach
    </select>

    <button type="submit">Save</button>
</form>