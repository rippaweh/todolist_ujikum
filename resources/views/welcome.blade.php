@extends('layouts.main')
@push('head')
<title>Todo List App</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">All Todos</div>
        <a href="{{ route('todo.create') }}" class="btn btn-primary btn-lg">Add Todo</a>
    </div>

    <div class="card shadow-lg rounded mb-5">
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Work</th>
                        <th>Date</th>
                        <th>Time</th> <!-- Tambahkan kolom Time -->
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                        @if ($todo->status !== 'done')
                            <tr>
                                <td>{{ $todo->name }}</td>
                                <td>{{ $todo->work }}</td>
                                <td>{{ $todo->date }}</td>
                                <td>{{ $todo->time }}</td> <!-- Tampilkan waktu -->
                                <td>{{ ucfirst($todo->status) }}</td>
                                <td>
                                    <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-success btn-sm">Update</a>
                                    <a href="{{ route('todo.delete', $todo->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    <a href="{{ route('todo.done', $todo->id) }}" class="btn btn-warning btn-sm">Done</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card shadow-lg rounded">
        <div class="card-body">
            <h3 class="mb-4">Completed Todos</h3>
            <table class="table table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Work</th>
                        <th>Date</th>
                        <th>Action</th> <!-- Tambahkan kolom Action -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                        @if ($todo->status === 'done')
                            <tr>
                                <td>{{ $todo->name }}</td>
                                <td>{{ $todo->work }}</td>
                                <td>{{ $todo->date }}</td>
                                <td>
                                    <a href="{{ route('todo.delete', $todo->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection