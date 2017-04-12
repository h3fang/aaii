@extends('layouts.main')

@section('title', 'Edit News')

@section('stylesheet')
<!-- include summernote css-->
<link href="/summernote/summernote.css" rel="stylesheet">
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Edit News</h1>
    
    @include('partials.errors')
    
    <form action="/news/{{$news->id}}" method='post'>
      {{ method_field('PUT') }}
      {{csrf_field()}}
      
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$news->title}}" placeholder="Enter the title" maxlength=255 required>
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea id="content" name="content" class="form-control" rows="10"  placeholder="Enter the content" required>{!! htmlentities($news->content) !!}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Save Changes</button>
      <a class="btn btn-warning" href="/news/{{$news->id}}" role="button">Discard Changes</a>
    </form>
  </div>
</div>
@endsection


@section('javascript')
<!-- include summernote js-->
<!--<script src="/summernote/summernote.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.min.js" integrity="sha256-+xpvFKckte4EEA5HIpqOOD2jNuVZJEwS5hGZJx+aCgc=" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
  $('#content').summernote({height: 500});
});
</script>
@endsection