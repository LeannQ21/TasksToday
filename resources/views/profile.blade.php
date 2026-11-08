<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Profile</title>
</head>
<body>
    <h1>Pastry Business Profile</h1>

    <nav>
        <a href="{{ route('home') }}">Welcome</a> |
        <a href="{{ route('tasks.index') }}">All Tasks</a> |
        <a href="{{ route('profile') }}">Profile</a> |
        <a href="{{ route('about') }}">About</a>
    </nav>

    <br>

    @if ($user)
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    @else
        <p>No profile information found.</p>
    @endif
</body>
</html>