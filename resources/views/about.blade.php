<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>About the Developer</h1>

    <nav>
        <a href="{{ route('home') }}">Welcome</a> |
        <a href="{{ route('tasks.index') }}">All Tasks</a> |
        <a href="{{ route('profile') }}">Profile</a> |
        <a href="{{ route('about') }}">About</a>
    </nav>

    <br>

    <p>
        This Tasks for Today Management System was developed by
        Leann Marie Querubin.
    </p>

    <p>
        The system helps organize daily activities for a small pastry business.
    </p>
</body>
</html>