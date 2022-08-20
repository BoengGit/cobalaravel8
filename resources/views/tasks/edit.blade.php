<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Tasks</h1>

                <form action="{{ route('tasks.update', $task->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-2">
                        <input class="form-control" type="text" name="list" value="{{ $task->list }}" placeholder="The name of the task">
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>