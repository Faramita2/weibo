@extends('layouts.default')
@section('title', 'login')
@section('content')
  <div class="offset-md-2 col-md-8">
    <div class="card">
      <div class="card-header">
        <h5>Log in</h5>
      </div>
      <div class="card-body">
        @include('shared._errors')

        <form action="{{ route('login') }}" method="post">

          @csrf

          <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" aria-describedby=Email>
            <small id=Email class="text-muted">Enter your email</small>
          </div>

          <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" aria-describedby="Password">
            <small id="Password" class="text-muted">Enter your password</small>
          </div>

          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="remember" id="remember">
              <label for="remember" class="form-check-label">Remember me</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Log in</button>
        </form>

        <hr>

        <p>New to Weibo? <a href="{{ route('signup') }}">Sign up</a></p>
      </div>
    </div>
  </div>
@stop