@extends('layouts.main')

@section('title', 'Sign up')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h1>Sign up</h1>
    
    @include('partials.errors')
    
    <form action='/auth/register' method='post'>
      {{csrf_field()}}
      
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="name" placeholder="Enter the username" maxlength=255 required>
      </div>
      
      <div class="form-group">
        <label for="username">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter the email" maxlength=255 required>
      </div>
      
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" rows="10"  placeholder="Enter the password" required maxlength=60>
      </div>
      
      <div class="form-group">
        <label for="password2">Confirm Password</label>
        <input type="password" id="password2" name="password2" class="form-control" rows="10"  placeholder="Enter the password again" required maxlength=60>
      </div>
      
      <div class="row">
        <div class="col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox">I agree to the Term of Service.
            </label>
          </div>
        </div>
        <div class="col-sm-2">
          <button type="submit" class="btn btn-success btn-block">Sign up</button>
        </div>
      </div>

    </form>
  </div>
</div>
@endsection