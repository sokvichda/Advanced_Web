<h1>Add Student</h1>

<form method="POST" action="/students">
    @csrf

    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Age: <input type="number" name="age"><br>

    <button type="submit">Save</button>
</form>