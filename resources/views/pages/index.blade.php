@extends('layouts.main')

@section('title', 'Pages')

@section('content')
  <div class="container">
    @foreach ($pages as $page)
      <h1>Pages</h1>
      <h1>{{$page->title}}</h1>
      {!! $page->content !!}
    @endforeach
  </div>
@endsection