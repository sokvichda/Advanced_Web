<!DOCTYPE html>
<html>
<head>
    <title>Environment-based Configuration</title>
</head>
<body>
    <h1>Environment-based Configuration</h1>

    <p><strong>Project Name:</strong> {{ config('app.name') }}</p>
    <p><strong>Application Environment:</strong> {{ config('app.env') }}</p>
</body>
</html>
