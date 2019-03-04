@extends('layout')

@section('content')
  <div class="container box hero is-dark has-text-centered">

    <h1 class="title">Current Projects</h1>

  </div>
  <div class="container">

    @foreach ($projects as $project)
    <div class="container box is-fluid">

      <ul class="is-dark" style="margin-bottom: 2em">
        <h4 class="subtitle">Name: <a href="/laravel/projects_app/public/projects/{{$project->id}}">{{$project->title}}</a></h4>
        <p>Owner: {{$project->owner}}</p>
      </ul>

    </div>
    @endforeach

  </div>
@endsection
