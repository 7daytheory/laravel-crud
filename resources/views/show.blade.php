@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-secondary mt-2">Go Back</a>
    <h1>{{ $todo->title }}</h1>
        <div class="badge badge-danger">{{ $todo->due }}</div>
        <hr>
        <p>{{ $todo->content }}</p>
        <hr>
        <form method="post" action="/todo/{{ $todo->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-2 float-right">Delete</button>
        </form>
        <a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary mt-2">Edit</a>
@endsection