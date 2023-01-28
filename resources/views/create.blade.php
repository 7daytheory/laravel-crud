@extends('layouts.app')

@section('content')
<h1>Create Entry</h1>

<form method="post" action="/todo">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
  </div>
  <div class="form-group">
    <label for="due">Due</label>
    <input type="text" class="form-control" id="due" name="due" placeholder="Enter due date" required>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea type="text" class="form-control" id="content" name="content" placeholder="Enter task description" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
