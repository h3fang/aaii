@extends('layouts.main')

@section('title', 'News')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @foreach ($news as $n)
        <div class="well">
          <h1><a href='/news/{{$n->id}}'>{{$n->title}}</a></h1>
          <p>Posted at: {{$n->created_at}}</p>
          <hr>
          {!!($n->content)!!}
        </div>
        <hr>
      @endforeach
      
      <div class="text-center">
        {!! $news->links(); !!}
      </div>
    </div>
  </div>
@endsection