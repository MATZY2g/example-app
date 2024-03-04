<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>
<body>
<h1>Create Task</h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br><br>
    <button type="submit">Create</button>
</form>
</body>
</html>
