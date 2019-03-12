@extends('layout')

@section('content')
<div class="section">


  <div class="container box hero is-dark has-text-centered">

    <h1 class="title">View Project</h1>

  </div>


  <div class="container">


    <div class="container box is-fluid">

      <div class="is-dark" style="margin-bottom: 2em;">
        <h4 class="subtitle has-text-black-bis has-text-weight-semibold">Title</h4>
        <p class="is-italic">{{$project->title}}</p>
      </div>


      <div class="is-dark" style="margin-bottom: 2em;">
        <h4 class="subtitle has-text-black-bis has-text-weight-semibold">Owner</h4>
        <p class="is-italic">{{$project->owner}}</p>
      </div>


      <div class="is-dark" style="margin-bottom: 2em;">
        <h4 class="subtitle has-text-black-bis has-text-weight-semibold">Description</h4>
        <p class="is-italic">{{$project->description}}</p>
      </div>


      <div class="is-dark" style="margin-bottom: 2em;">
        <h4 class="subtitle has-text-black-bis has-text-weight-semibold">Created</h4>
        <p class="is-italic">{{$project->created_at}}</p>
      </div>

      <div class="level">
        <div class="control">
          <button class="button level-left"><a href="{{env('BASE_URL')}}/projects/{{ $project->id }}/edit">Edit</a></button>
        </div>

        <form class="level-right" action="{{ env('base_url') }}projects/{{$project->id}}" method="post">
          @csrf
          {{ method_field('DELETE') }}

        <div class="control">
          <button type="submit" class="button has-text-danger">Delete Project</button>
        </div>

        </form>
      </div>

    </div>

    <div class="container box is-fluid">

      <div class="is-dark" style="margin-bottom: 2em;">
        <h4 class="subtitle has-text-black-bis has-text-weight-semibold">Tasks</h4>
        @for ($i=0; $i<7; $i++)
          <p class="is-italic">Task  #{{$i}}</p>
        @endfor
      </div>

    </div>

  </div>

</div>
@endsection
