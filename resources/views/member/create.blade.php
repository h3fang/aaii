@extends('layouts.main')

@section('title', 'Create Member')

@section('stylesheet')
@include('partials.summernote_css')

<style type="text/css">
input[type="file"] {
  display: none;
}

.custom-file-upload {
  border: 1px solid #ccc;
  border-radius: 5px;
  display: inline-block;
  padding: 6px 12px;
  margin: 5px;
  cursor: pointer;
}
.custom-file-upload:hover {
    background-color: #EEEEEE;
}

#photo-img {
  border: 5px solid #ccccff;
  margin-bottom: 5px;
  width:300px;
  height:300px;
  border-radius:50%;
}

</style>
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 mr-auto ml-auto">
    <h1>Create Member</h1>
    
    @include('partials.errors')
    
    <form action='/member' method='post' enctype="multipart/form-data">
      {{csrf_field()}}
      
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="fullname">Full name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter the fullname" maxlength=255 required>
          </div>
          
          <div class="radio">
            <label class="radio-inline">
              <input type="radio" name="type" id="typeRadio1" value="staff" checked> Staff
            </label>
            <label class="radio-inline">
              <input type="radio" name="type" id="typeRadio2" value="student"> Student
            </label>
          </div>
          
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" maxlength=255 required>
          </div>
          
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter the email" maxlength=255>
          </div>
          
          <div class="form-group">
            <label for="joined_at">Joined at</label>
            <input type="date" class="form-control" id="joined_at" name="joined_at" value="{{date('Y-m-d')}}" required>
          </div>
          
        </div>
        
        <div class="col-md-6 text-center">
          <img id="photo-img" src="/image/member/default-profile.png"></img>
          <br/>
          <input type="file" id="photo" name="photo">
          <label for="photo" class="custom-file-upload">
              <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Upload profile picture
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" class="form-control" placeholder="Enter the description" required></textarea>
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
      <a class="btn btn-warning" href="/members" role="button">Cancel</a>
    </form>
  </div>
</div>
@endsection


@section('javascript')
@include('partials.summernote_js')

<script>
$(document).ready(function() {
  $('#description').summernote({height: 300});
});

document.getElementById("photo").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("photo-img").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
</script>
@endsection