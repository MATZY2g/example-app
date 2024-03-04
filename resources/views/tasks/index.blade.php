<!DOCTYPE html>
<html>
<body>

<h1>tasks will be there</h1>

@if($tasks !== null && count($tasks) > 0)

@foreach($tasks as $task)
    {{ $task->id }}
@endforeach
@else
    none tasks here
@endif
</body>
</html>
