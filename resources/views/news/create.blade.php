@extends('layouts.main')

@section('title', 'Create News')

@section('stylesheet')
@include('partials.summernote_css')
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 mr-auto ml-auto">
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
@include('partials.summernote_js')

<script>
$(document).ready(function() {
  $('#newsContent').summernote({height: 500});
});
</script>
@endsection