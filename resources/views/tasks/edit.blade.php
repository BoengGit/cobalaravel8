<x-app-layout>
    <h1>Tasks</h1>

    <form action="/tasks/{{ $task->id }}" method="post">
        @method('put')
        @csrf
        <input type="text" name="list" value="{{ $task->list }}" placeholder="The name of the task">
        <button type="submit">Update</button>
    </form>
</x-app-layout>