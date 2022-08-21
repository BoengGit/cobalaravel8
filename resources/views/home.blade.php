<x-app-layout>
    <div class="container row">
        <div class="col-md-6">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Welcome to my site</div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique deserunt tempora ad quisquam, a fugit iste necessitatibus nemo corporis non, cum vero officiis quo et earum minima eius. Perferendis, a.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eveniet tempora eius natus ullam harum minus quo, nesciunt animi cum distinctio ipsum delectus, temporibus optio? Nihil repellendus sunt aliquid illum?</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>