@extends('layouts.main')

@section('title', 'All News')

@section('stylesheet')
  <style>
      .table > tbody > tr > td { vertical-align: middle; }
  </style>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8 ml-auto mr-auto">
      <div class="row" style="display: flex; align-items: center;">
    		<div class="col-md-8">
    			<h1>All News</h1>
    		</div>
    
    		<div class="col-md-2 ml-auto">
    			<a href="{{ route('news.create') }}" class="btn btn-success btn-lg">Create News</a>
    		</div>
    	</div>
    	
    	<hr>
    	
      <div class="class="table-responsive"">
        <table class="table table-striped table-hover" style="width:100%">
          <thead>
            <tr>
              <th>#</th>
              <th>ID</th>
              <th>Title</th> 
              <th>Created at</th>
              <th>Updated at</th>
              <th>Actions</th>
            </tr>
          </thead>
          
          <tbody>
            @php ($id = 1)
            @foreach ($news as $n)
              <tr>
                <td>{{$id}}</td>
                <td>{{$n->id}}</td>
                <td><a href="/news/{{$n->id}}">{{$n->title}}</a></td>
                <td>{{$n->created_at}}</td> 
                <td>{{$n->updated_at}}</td>
                <td>
                  <a class="btn btn-primary" href="/news/{{$n->id}}/edit" role="button">Edit</a>
                  <form style="display:inline" method="POST" action="{{ route('news.destroy', $n->id) }}">
                    <input type="submit" value="Delete" class="btn btn-danger">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                  </form>
                </td>
              </tr>
              @php ($id += 1)
            @endforeach
          </tbody>
        </table>
        <div class="text-center">
          {!! $news->links(); !!}
        </div>
        
      </div>
      
    </div>
  </div>
@endsection