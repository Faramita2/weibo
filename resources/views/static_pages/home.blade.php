@extends('layouts.default')
@section('content')
  <div class="jumbotron">
    <h1>Hello guy</h1>
    <p class="lead">
      You are looking <a href="https://lgzzzz.com">Meow</a>'s Weibo project home page.
    </p>
    <p>
      Everything starts from here.
    </p>
    <p>
      @if (!Auth::check())
        <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">Sign up now</a>
      @endif
    </p>
  </div>
@stop
