@extends('layouts.main')

@section('title', 'Members')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Members</h1>
  </div>
  <div class="col-md-10 col-md-offset-1">
    <hr>
  </div>
  
  @foreach ($members as $m)
    <div class="col-md-10 col-md-offset-1">
      <hr>
    </div>
  @endforeach
  
</div>
@endsection