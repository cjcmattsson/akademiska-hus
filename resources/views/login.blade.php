@extends('layouts.default')

@section('content')

<br>
    <form class="loginForm" action=""{{url('login')}}"" method="post">

      @csrf

      <label for="email">Email</label>
        <input type="email" name="email" value="">
        <br>
      <label for="password">Password</label>
        <input type="password" name="password" value="">
        <br>
      <button type="submit">Login</button>
        @include('partials/errors')
    </form>


@stop
