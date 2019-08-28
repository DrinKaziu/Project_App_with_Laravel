@extends('layout')

@section('content')
  <h1>Edit project</h1>
  <form method="POST" action="/projects/{{ $project->id }}">
    @method('PATCH')
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" aria-describedby="title" placeholder="Title" value="{{ $project->title }}">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" class="form-control" placeholder="Description">{{ $project->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  <hr>
  <form method="POST" action="/projects/{{ $project->id }}">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
  @include('errors')
@endsection