@extends('layouts.main')

@section('title', 'Members')

@section('content')
<div class="row">
  <div class="col-md-8 mr-auto ml-auto">
    <h1>Members</h1>
  </div>
  <div class="col-md-8 mr-auto ml-auto">
    <hr>
  </div>
  
  @foreach ($members as $m)
    <div class="col-md-8 mr-auto ml-auto">
      <p>{{$m->fullname}}</p>
      <p>{{$m->title}}</p>
      <p>{{$m->joined_at}}</p>
      <p>{{$m->email}}</p>
      <img src="{{$m->photo}}"></img>
      <div class="well">
        {!!($m->description)!!}
      </div>
      <hr>
    </div>
  @endforeach
  
</div>
@endsection