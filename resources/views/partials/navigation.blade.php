@php
use Illuminate\Support\Facades\Auth;
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        @if (Auth::check())
          <li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin')}}">ADMIN</a>
            </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('logout')}}">LOGOUT</a>
          </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{url('login')}}">LOGIN</a>
          </li>
          @endif

      </ul>
    </div>
  </nav>
