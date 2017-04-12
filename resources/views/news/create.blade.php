@extends('layouts.main')

@section('title', 'Create News')

@section('stylesheet')
<!-- include summernote css-->
<link href="/summernote/summernote.css" rel="stylesheet">
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Create News</h1>
    
    @include('partials.errors')
    
    <form action='/news' method='post'>
      {{csrf_field()}}
      
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" maxlength=255 required>
      </div>
      <div class="form-group">
        <label for="newsContent">Content</label>
        <textarea id="newsContent" name="content" class="form-control" rows="10"  placeholder="Enter the content" required></textarea>
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
      <a class="btn btn-warning" href="/news" role="button">Cancel</a>
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
  $('#newsContent').summernote({height: 500});
});
</script>
@endsection