@php
use Illuminate\Support\Facades\Auth;
@endphp

@if (!Auth::check())
<div class="navbar-bot">

        {{-- LEFT bottom navbar place --}}
            {{-- If logged in - Middle bottom navbar place --}}
            <a class="news nav-item" href="{{url('feed')}}">Nyheter</a>
            <a class="report nav-item" href="{{route('report')}}">Felanmäl</a>
            <a class="campus-info nav-item" href="{{url('campusinfo')}}">Campusinfo</a>
            <img class="report-icon" src="{{ URL::to('/') }}/images/felanmallan-nav-bot.svg" alt="">

            {{-- Put this in the cog-wheel section later --}}
            {{-- <a class="nav-link" href="{{url('logout')}}">LOGOUT</a> --}}
</div>
@else
  <div class="navbar-bot admin">
  <a class="edit-campus-info nav-item admin-bot-nav-item" href="{{url('editcampus')}}">Campus<br>nyheter</a>
  <a class="disturbances nav-item admin-bot-nav-item" href="{{url('driftstorningar')}}">Drift<br>Störningar</a>
  <a class="edit-faq nav-item admin-bot-nav-item" href="{{url('editfaq')}}">Vanliga<br>Frågor</a>

</div>


@endif
