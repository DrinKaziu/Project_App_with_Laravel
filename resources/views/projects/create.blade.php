@extends('layout')

@section('content')
  <h1>Create a new project</h1>
  <form method="POST" action="/projects">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" aria-describedby="title" placeholder="Title" required>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" class="form-control" placeholder="Description" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @include('errors')
@endsection