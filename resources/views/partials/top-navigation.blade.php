@php
use Illuminate\Support\Facades\Auth;
@endphp

<div class="navbar-top">

        {{-- LEFT bottom navbar place --}}
        <div class="top-icon">
          <a class="phone" href="/"><i class="material-icons">phone</i></a>
        </div>
        <div class="top-icon">
          <a class="logo" href="{{route('admin.dashboard')}}"><i class="material-icons">radio</i></a>
        </div>
        @if (Auth::check())



          @else
            <div class="top-icon">
              <a class="settings " href="{{route('report')}}"><i class="material-icons">settings</i></a>
            </div>
              {{-- Put this in the cog-wheel section later --}}
              {{-- <a class="nav-link" href="{{route('admin.profile')}}">PROFIL</a> --}}
              {{-- Put this in the cog-wheel section later --}}
              {{-- <a class="nav-link" href="{{url('logout')}}">LOGOUT</a> --}}

              {{-- Put this in the cog-wheel section later --}}
              {{-- <a class="nav-link" href="{{url('login')}}">LOGIN</a> --}}

          @endif

</div>
