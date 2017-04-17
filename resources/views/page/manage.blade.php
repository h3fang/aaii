@extends('layouts.main')

@section('title', 'Pages')

@section('stylesheet')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <style>
      .table > tbody > tr > td { vertical-align: middle; }
  </style>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="row" style="display: flex; align-items: center;">
    		<div class="col-md-10">
    			<h1>All Pages</h1>
    		</div>
    
    		<div class="col-md-2">
    			<a href="{{ route('page.create') }}" class="btn btn-success btn-lg">Create Page</a>
    		</div>
    	</div>
    	
    	<hr>
    	
      <div class="table-responsive">
        <table class="table table-striped table-hover" style="width:100%">
          <colgroup>
            <col width=3%>
            <col class="col-md-1">
            <col class="col-md-2">
            <col class="col-md-2">
            <col class="col-md-2">
            <col class="col-md-2">
            <col class="col-md-2">
          </colgroup>
          <tr>
            <th></th>
            <th>ID</th>
            <th>Title</th>
            <th>Created by</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Actions</th>
          </tr>
          <tbody id="pages_table" class="list-group">
            @foreach ($pages as $p)
              <tr class="item" data-id="{{$p->id}}">
                <td><i class="fa fa-bars" aria-hidden="true"></i></td>
                <td>{{$p->id}}</td>
                <td><a href="/page/{{$p->slug}}">{{$p->title}}</a></td>
                <td>{{$p->created_by}}</td>
                <td>{{$p->created_at}}</td> 
                <td>{{$p->updated_at}}</td>
                <td>
                  <a class="btn btn-primary" href="/page/{{$p->slug}}/edit" role="button">Edit</a>
                  <form style="display:inline" method="POST" action="/page/{{$p->slug}}">
                    <input type="submit" value="Delete" class="btn btn-danger">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <form method="POST" action="/page/order">
          <input id="order" type="hidden" name="order" value="">
          {{csrf_field()}}
           
          <button type="submit" class="btn btn-success">Save Changes</button>
          <a class="btn btn-warning" href="/page/manage" role="button">Discard Changes</a>
        </form>
      </div>
      
    </div>
  </div>
@endsection

@section('javascript')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.5.1/Sortable.min.js" integrity="sha256-OQFsXEK3UpvAlOjkWPTPt+jOHF04+PgHoZES3LTjWos=" crossorigin="anonymous"></script>
  
  <script>
    Sortable.create(pages_table, {
      animation: 100,
      onSort: function (/**Event*/evt) {
    		// same properties as onUpdate
    		document.getElementById('order').value = this.toArray().join();
    	},
    });
  </script>
@endsection