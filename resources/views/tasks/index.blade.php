<x-app-layout>
    <div class="container">  
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create new Task</div>
                    <div class="card-body">
                        <form action="/tasks" method="post" class="d-flex">
                        @csrf
                        <input class="form-control me-2" type="text" name="list" placeholder="The name of the task">
                        <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $index + 1 }} - {{ $task->list }}
                    <div class="d-flex"> 
                        <a class="btn btn-primary me-2" href="/tasks/{{ $task->id }}/edit">edit</a>
                        <form action="/tasks/{{ $task->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</x-app-layout>