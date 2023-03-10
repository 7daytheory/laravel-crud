@extends('layouts.app')

@section('content')
<h1>To do list</h1>
    @include('inc.messages')
    @if (count($todos) > 0)
        @foreach ($todos as $todo)
        <div class="card m-2">
            <h2><a href="todo/{{ $todo->id }}">{{ $todo->title }}</a></h2>
            <h3>{{ $todo->content }}</h3>
            <span class="badge badge-danger">{{ $todo->due }}</span>
        </div>
        @endforeach
    @endif
@endsection