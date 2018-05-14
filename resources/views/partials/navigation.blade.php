@php
use Illuminate\Support\Facades\Auth;
@endphp

<div class="">

        <a href="/">Campuskollen</a>
        @if (Auth::check())

            <a class="nav-link" href="{{route('admin.dashboard')}}">DASHBOARD</a>


            <a class="nav-link" href="{{route('admin.profile')}}">PROFIL</a>


            <a class="nav-link" href="{{url('logout')}}">LOGOUT</a>

          @else

              <a class="nav-link" href="{{route('report')}}">FELANMÄLLAN</a>


              <a class="nav-link" href="{{url('login')}}">LOGIN</a>

          @endif

</div>
