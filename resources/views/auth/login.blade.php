@extends('frontend.layouts.layout')
@section('title')
       login
@endsection
@section('content')
<section class="inner-page">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      Login
                  </div>
                  <div class="card-body">
                      <form action="{{ route('login') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" name="email" id="email" class="form-control" required>
                              @error('email')
                                  <span>{{$message}}</span>
                              @enderror
                          </div>
                          <div class="form-group mb-2">
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password" class="form-control" required>
                              @error('email')
                              <span>{{$message}}</span>
                              @enderror
                          </div>
                          
                          <button type="submit" class="btn btn-primary">Login</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>
  @endsection