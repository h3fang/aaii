@extends('layouts.main')

@section("title", $page->title)

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>{{$page->title}}</h1>
      <hr>
      {!! $page->content !!}
    </div>
  </div>
</div>
@endsection
