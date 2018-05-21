@php
use Illuminate\Support\Facades\Auth;
@endphp

<div class="navbar-bot">

        {{-- LEFT bottom navbar place --}}
        <a class="news nav-item" href="{{url('feed')}}">Nyheter</a>
        @if (Auth::check())
            {{-- If logged in - Middle bottom navbar place --}}
            <a class="dashboard nav-item" href="{{route('admin.dashboard')}}">DASHBOARD</a>

            {{-- Put this in the cog-wheel section later --}}
            {{-- <a class="nav-link" href="{{route('admin.profile')}}">PROFIL</a> --}}

            {{-- Put this in the cog-wheel section later --}}
            {{-- <a class="nav-link" href="{{url('logout')}}">LOGOUT</a> --}}

          @else
              {{-- If NOT logged in - Middle bottom navbar place --}}
              <a class="nav-item" href="{{route('report')}}">Felanmäl</a>

              {{-- Put this in the cog-wheel section later --}}
              {{-- <a class="nav-link" href="{{url('login')}}">LOGIN</a> --}}

          @endif
          <a class="campus-info nav-item" href="{{url('campusinfo')}}">Campusinfo</a>

</div>
