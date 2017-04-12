@extends('layouts.main')

@section('title', 'Create Page')

@section('stylesheet')
<!-- include summernote css-->
<link href="/summernote/summernote.css" rel="stylesheet">
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Create Page</h1>
    
    @include('partials.errors')
    
    <form action='/page' method='post'>
      {{csrf_field()}}
      
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" maxlength=255 required>
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea id="content" name="content" class="form-control" rows="10"  placeholder="Enter the content" required></textarea>
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
      <a class="btn btn-warning" href="/page/manage" role="button">Cancel</a>
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