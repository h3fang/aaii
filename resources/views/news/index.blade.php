@extends('layouts.main')

@section('title', 'News')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @foreach ($news as $n)
        <h1><a href='/news/{{$n->id}}'>{{$n->title}}</a></h1>
        <p>Posted at: {{$n->created_at}}</p>
        <hr>
          
        <div class="well">
          {!!($n->content)!!}
        </div>
      @endforeach
      
      <div class="text-center">
        {!! $news->links(); !!}
      </div>
    </div>
  </div>
@endsection