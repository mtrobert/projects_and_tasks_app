@extends('layout')

@section('content')

<div class="container box hero is-dark has-text-centered">

  <h1 class="title">Create A Project</h1>

</div>


<div class="container">

<form class="form" action="{{env('BASE_URL')}}/projects" method="post">

  {{ csrf_field() }}

  <div class="field">

    <div class="control">
      <input class="input" type="text" name="title" placeholder="Title">
    </div>

  </div>

  <div class="field">

    <div class="control">
      <input class="input" type="text" name="owner" placeholder="Owner">
    </div>

  </div>

  <div class="field">

    <div class="control">
      <textarea class="textarea" name="description" rows="8" cols="80"  placeholder="Description"></textarea>
    </div>

  </div>


  <div class="field">

      <button class="button" type="submit">Create A Project</button>

  </div>


</form>

</div>

@endsection
