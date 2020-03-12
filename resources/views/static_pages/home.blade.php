@extends('layouts.default')
@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      You are looking <a href="https://lgzzzz.com">Meow's Weibo</a> project home page.
    </p>
    <p>
      Everything starts from here.
    </p>
    <p>
      <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">Sign up now</a>
    </p>
  </div>
@stop
