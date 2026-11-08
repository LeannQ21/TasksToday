<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Pastry Tasks</title>
</head>
<body>
    <h1>All Pastry Tasks</h1>

    <nav>
        <a href="{{ route('home') }}">Welcome</a> |
        <a href="{{ route('tasks.index') }}">All Tasks</a> |
        <a href="{{ route('profile') }}">Profile</a> |
        <a href="{{ route('about') }}">About</a>
    </nav>

    <br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ ucfirst($task->status) }}</td>
                    <td>{{ $task->task_date }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No tasks found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>