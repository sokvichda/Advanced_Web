<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>User Profile</h1>

    <p>Name: {{ $name }}</p>
    <p>Age: {{ $age }}</p>

    @if($age >= 18)
        <p>Status: Adult</p>
    @else
        <p>Status: Minor</p>
    @endif

</body>
</html>