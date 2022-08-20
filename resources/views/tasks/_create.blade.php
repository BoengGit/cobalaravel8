<div class="card">
    <div class="card-header">Create new Task</div>
    <div class="card-body">
        @if ($errors->all())
            <div class="alert alert-danger">
                Your data was invalid
            </div>
        @endif
        <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <div class="mb-2">
            <input class="form-control @error('list') is-invalid @enderror me-2" type="text" name="list" placeholder="The name of the task">
            @error('list')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Add</button>
        </form>
    </div>
</div>