@extends('layouts.default')
@section('title', 'Update password')

@section('content')
<div class="offset-md-1 col-md-10">
  <div class="card">
    <div class="card-header">
      <h5>Update password</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('password.update') }}" method="post">
        @csrf

        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">Email: </label>

          <div class="col-md-6">
            <input type="email" name="email" id="email"
            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus>
            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">Password: </label>

          <div class="col-md-6">
            <input type="password" name="password" id="password"
            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
            @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm password: </label>
          <div class="col-md-6">
            <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required>
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">Reset password</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection