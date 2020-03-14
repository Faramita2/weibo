@extends('layouts.default')
@section('title', 'Reset password')

@section('content')
  <div class="col-md-8 offset-md-2">
    <div class="card">
      <div class="card-header"><h5>Reset password</h5></div>

      <div class="card-body">
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST">

          @csrf
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="form-control-label">Email: </label>

            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">

            @if ($errors->has('email'))
              <span class="form-text">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Send email to reset password</button>
          </div>

        </form>
      </div>
    </div>
  </div>
@stop