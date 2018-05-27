@php
use Illuminate\Support\Facades\Auth;
@endphp

@if(Auth::check())
<div class="admin-navbar-top">
  <a href="#"><img src="{{ URL::to('/') }}/images/contact-navbar.svg" alt=""></a>
  <a href="#"><img src="{{ URL::to('/') }}/images/contact-navbar.svg" alt=""></a>
  <a href="{{route('logout')}}"><img src="{{ URL::to('/') }}/images/contact-navbar.svg" alt=""></a>
</div>
@endif
