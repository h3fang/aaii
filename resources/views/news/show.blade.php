@extends('layouts.main')

@section('title', 'News')

@section('content')
<div class="row">
  <div class="col-md-8 ml-auto mr-auto">
    <hr>
    <h1>{{$news->title}}</h1>
    <p>Posted at: {{$news->created_at}}, Last Updated at: {{$news->updated_at}}</p>
    <hr>
    <div class="well">
      {!! $news->content !!}
    </div>
    <hr>
  </div>
</div>
@endsection
