@extends('layouts.main')
@push('head')
<title>Todo List App</title>
@endpush

@section('main-section')

<div class="container">
    <div class="id-flex justify-content-between align-items-center my-5">
        <div class="h2">Add Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary">Back</a>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route("todo.store")}}" method="post">
        @csrf
        <label for="" class="form-label mt-4">Name</label>
        <input type="text" name="name" class="form-control">
        <div class="text-danger">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <label for="" class="form-label mt-4">Work</label>
        <input type="text" name="work" class="form-control">
        <div class="text-danger">
            @error('work')
            {{$message}}
            @enderror
        </div>
        <label for="" class="form-label mt-4">Date</label>
        <input type="date" name="date" class="form-control">
        <div class="text-danger">
            @error('date')
            {{$message}}
            @enderror
        </div>
        <label for="time" class="form-label mt-4">Time</label>
        <input type="time" name="time" class="form-control">
        <div class="text-danger">
            @error('time')
            {{$message}}
            @enderror
</div>
        <button class="btn btn-primary btn-lg">Add Todo</button>
</form>
    </div>
</div>

</div>


@endsection