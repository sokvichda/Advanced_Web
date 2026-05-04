<h2>Add Student</h2>

    <form action="{{ route('students.store') }}" method="POST">

    @csrf

        Name: <input type="text" name="name" required><br><br>

        Email: <input type="email" name="email" required><br><br>

        Age: <input type="number" name="age" required><br><br>

        <button type="submit">Add Student</button>

    </form>

<a href="{{ route('students.index') }}">Back</a>