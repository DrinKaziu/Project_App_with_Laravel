@extends('layout')

@section('content')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $project->title }}</h5>
    <p class="card-text">{{ $project->description }}</p>
    <a href="/projects/{{ $project->id }}/edit" class="card-link">Edit</a>
  </div>
</div>
@endsection

