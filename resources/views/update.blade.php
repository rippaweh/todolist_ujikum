@extends('layouts.main')
@push('head')
<title>Todo List App</title>
@endpush

@section('main-section')

<div class="container">
    <div class="id-flex justify-content-between align-items-center my-5">
        <div class="h2">Edit Todo</div>
        <a href="" class="btn btn-primary">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{route("todo.updateData")}}" method="post">
         @csrf 
        <label for="" class="form-label mt-4">Name</label>
        <input type="text" name="name" class="form-control" value="
        {{$todo->name}}">
        <label for="" class="form-label mt-4">Work</label>
        <input type="text" name="work" class="form-control" value="
        {{$todo->work}}">
        <label for="" class="form-label mt-4">Date</label>
        <input type="date" name="date" class="form-control" value="
        {{$todo->date}}">
        <label for="time" class="form-label mt-4">Time</label>
        <input type="time" name="time" class="form-control" value="{{ $todo->time }}">
        <div class="text-danger">
    @error('time')
    {{$message}}
    @enderror
</div>
        <input type="number" name="id" value="{{$todo->id}}" hidden>
        <button class="btn btn-primary btn-lg">Update</button>
</form>
    </div>
</div>

</div>


@endsection