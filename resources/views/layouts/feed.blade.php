@extends('layouts.default')

@section('content')
  <div class="feed-nav-bar">
    <a class="feed-nav-item" href="/">AHA</a>
    <a class="feed-nav-item" href="/">Campus</a>
    <a class="feed-nav-item" href="/">Frågor</a>
  </div>

  @yield('feed')
  
@stop
