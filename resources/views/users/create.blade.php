@extends('layouts.default')
@section('title', 'Sign up')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>Sign up</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Name: </label>
          <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
          <label for="name">Email: </label>
          <input class="form-control" type="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <label for="name">Password: </label>
          <input class="form-control" type="password" name="password" value="{{ old('password') }}">
        </div>
        <div class="form-group">
          <label for="password_confirmation">Name: </label>
          <input class="form-control" type="text" name="password_confirmation" value="{{ old('password_confirmation') }}">
        </div>

        <button type="submit" class="btn btn-primary">Sign up</button>
      </form>
    </div>
  </div>
</div>
@stop
