@extends('layouts.main')

@section('title', 'Edit Page')

@section('stylesheet')
@include('partials.summernote_css')
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 ml-auto mr-auto">
    <h1>Edit Page</h1>
    
    @include('partials.errors')
    
    <form action='/page/{{$page->slug}}' method='post'>
      {{ method_field('PUT') }}
      {{csrf_field()}}
      
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$page->title}}" placeholder="Enter the title" maxlength=255 required readonly="true">
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea id="content" name="content" class="form-control" rows="10"  placeholder="Enter the content" required>{!! htmlentities($page->content) !!}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Save Changes</button>
      <a class="btn btn-warning" href="/page/{{$page->slug}}" role="button">Discard Changes</a>
    </form>
  </div>
</div>
@endsection


@section('javascript')
@include('partials.summernote_js')

<script>
$(document).ready(function() {
  $('#content').summernote({height: 450});
});
</script>
@endsection