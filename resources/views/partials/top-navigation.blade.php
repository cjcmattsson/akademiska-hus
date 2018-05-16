@php
use Illuminate\Support\Facades\Auth;
@endphp

<div class="navbar-top">

        {{-- LEFT bottom navbar place --}}
        <div class="navbar-top-bar">
          <div class="top-icon">
            <a class="contact"><i class="material-icons">phone</i></a>
          </div>
          <div class="top-icon">
            <a class="logo" href="{{url('/feed')}}"><i class="material-icons">radio</i></a>
          </div>
          <div class="top-icon">
            <a class="settings"><i class="material-icons">settings</i></a>
          </div>
        </div>


              {{-- Put this in the cog-wheel section later --}}
              {{-- <a class="nav-link" href="{{route('admin.profile')}}">PROFIL</a> --}}
              {{-- Put this in the cog-wheel section later --}}
              {{-- <a class="nav-link" href="{{url('logout')}}">LOGOUT</a> --}}

              {{-- Put this in the cog-wheel section later --}}
              {{-- <a class="nav-link" href="{{url('login')}}">LOGIN</a> --}}

              <div class="contact-side-menu"></div>
              <div class="settings-side-menu"></div>
</div>
