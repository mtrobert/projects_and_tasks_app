@extends('layout')

@section('content')

  <div class="section">

    <div class="container box hero is-dark has-text-centered">

      <h1 class="title">Edit Project</h1>

    </div>


    <div class="container">

      <form class="box container is-fluid" action="{{ env('BASE_URL') }}/projects/{{ $project->id }}" method="post">
        @csrf
        {{method_field('PATCH')}}

        <div class="field">

          <label class="label">Title</label>

          <div class="control">
            <input class="input" name="title" type="text" placeholder="Title" value="{{ $project->title }}">
          </div>

        </div>


        <div class="field">

          <label class="label">Owner</label>

          <div class="control">
            <input class="input" name="owner" type="text" placeholder="Owner" value="{{ $project->owner }}">
          </div>

        </div>


        <div class="field">

          <label class="label">Description</label>

          <div class="control">
            <textarea class="textarea" name="description" rows="8"  placeholder="Description">{{ $project->description }}</textarea>
          </div>

        </div>


        <div class="field">

          <div class="control">
            <button class="button has-text-info" type="submit">Update Project</button>
          </div>

        </div>


      </form>


    </div>
  </div>

@endsection
