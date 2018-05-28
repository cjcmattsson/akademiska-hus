@extends('layouts.default')

@section('content')

<div class="login-page-content">

  <h2>Campuskollen</h2>

    <form class="loginForm" action=""{{url('login')}}"" method="post">

      @csrf

      <label for="email">Email</label>
        <input type="email" name="email" value="">
        <br>
      <label for="password">Password</label>
        <input type="password" name="password" value="">
        <br>
      <button class="login-button" type="submit">Login</button>
        @include('partials/errors')
    </form>

  </div>

@stop
