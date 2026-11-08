<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today's Pastry Tasks</title>
</head>
<body>
    <h1>Today's Pastry Tasks</h1>

    <nav>
        <a href="{{ route('home') }}">Welcome</a> |
        <a href="{{ route('tasks.index') }}">All Tasks</a> |
        <a href="{{ route('profile') }}">Profile</a> |
        <a href="{{ route('about') }}">About</a>
    </nav>

    <br>

    @forelse ($tasks as $task)
        <p>
            <strong>{{ $task->title }}</strong>
            - {{ ucfirst($task->status) }}
        </p>
    @empty
        <p>No pastry tasks scheduled for today.</p>
    @endforelse
</body>
</html>