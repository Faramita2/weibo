@extends('layouts.default')
@section('title', 'Update user profile')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>Update user profile</h5>
    </div>
    <div class="card-body">

      @include('shared._errors')
      <div class="gravatar-edit">
        <a href="http://gravatar.com/emails" target="_blank">
          <img src="{{ $user->gravatar(200) }}" alt="{{ $user->name }}" class="gravatar"/>
        </a>
      </div>

      <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="name">Name: </label>
          <input class="form-control" type="text" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
          <label for="name">Email: </label>
          <input class="form-control" type="email" name="email" value="{{ $user->email }}" disabled>
        </div>
        <div class="form-group">
          <label for="name">Password: </label>
          <input class="form-control" type="password" name="password" value="{{ old('password') }}">
        </div>
        <div class="form-group">
          <label for="password_confirmation">Confirm password: </label>
          <input class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>
@stop
