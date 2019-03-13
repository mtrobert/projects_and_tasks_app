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

        <form class="level-right" action="{{ env('BASE_URL') }}/projects/{{$project->id}}" method="post">
          {{ csrf_field() }}
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
      </div>

      <div class="container">

      @if ($project->tasks->count())

        @foreach ($project->tasks as $task)

          <form  action="{{ env('BASE_URL') }}/tasks/{{$task->id}}" method="POST">

            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div>
              <label class="checkbox {{ $task->completed ? "is-complete" : "" }}" for="completed">

              <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? "checked": "" }}>
                  {{$task->description}}

                </label>
            </div>

          </form>

        @endforeach

      @else

        <p>There is no task for this project.</p>

      @endif
    </div>

    </div>

    <div class="container box is-fluid">

      <form class="" action="{{ env('BASE_URL') }}/projects/{{$project->id}}/tasks" method="post">
        {{ csrf_field() }}

        <div class="field">

          <div class="control">
            <input class="input" type="text" name="description" placeholder="Description" value="{{ old('description') }}">
          </div>

        </div>

        <div class="field">

            <button class="button" type="submit">Add A Task</button>

        </div>

        @include('errors')

      </form>
    </div>

  </div>

</div>
@endsection
