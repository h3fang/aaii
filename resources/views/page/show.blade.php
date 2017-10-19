@extends('layouts.main')

@section("title", $page->title)

@section('content')
<!--<div class="container">-->
  <div class="row">
    <div class="col-lg-8 mr-auto ml-auto">
      <h1>{{$page->title}}</h1>
      <hr>
      {!! $page->content !!}
    </div>
  </div>
<!--</div>-->
@endsection
