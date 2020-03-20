@extends('layouts.default')
@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h4>Status list</h4>
        <hr>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
        <section class="stats mt-2">
          @include('shared._stats', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
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
  @endif
@stop
