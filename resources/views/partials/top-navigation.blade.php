@php
use Illuminate\Support\Facades\Auth;
@endphp

@if (!Auth::check())
<div class="navbar-top">

        <div class="navbar-top-bar">
          <div class="top-icon">
            <a class="contact"><img src="{{ URL::to('/') }}/images/contact-navbar.svg" alt=""></a>
          </div>
          <div class="top-icon">
            <a class="logo" href="{{url('/feed')}}"><img src="{{ URL::to('/') }}/images/logo-navbar.svg" alt=""></a>
          </div>
          <div class="top-icon">
            <a class="settings"><img src="{{ URL::to('/') }}/images/settings-navbar.svg" alt=""></a>
          </div>
        </div>


              {{-- Put this in the cog-wheel section later --}}
              {{-- <a class="nav-link" href="{{route('admin.profile')}}">PROFIL</a> --}}
              {{-- Put this in the cog-wheel section later --}}
              {{-- <a class="nav-link" href="{{url('logout')}}">LOGOUT</a> --}}

              {{-- Put this in the cog-wheel section later --}}
              {{-- <a class="nav-link" href="{{url('login')}}">LOGIN</a> --}}

              <div class="contact-side-menu">
                <div class="side-menu-header contact">
                  <img src="{{ URL::to('/') }}/images/contact-navbar.svg" alt="">
                  <h2>Kontakt</h2>
                </div>
                <div class="text-side-menu">

                  <div class="campus-section">
                    {{-- <h2>{{$campus->name}}</h2> --}}
                    <h2>Chalmers - Campus Johanneberg</h2>
                    <p class="c-name">Janne Andersson</p>
                    <p class="c-title">Konsult</p>
                    <p class="c-phone"><img src="{{ URL::to('/') }}/images/phone-icon-white.svg" alt="">031-124 56703</p>
                    <p class="c-email"><img src="{{ URL::to('/') }}/images/email-icon-white.svg" alt="">mail.mailsson@mail.com</p>
                  </div>
                  <div class="akademiska-hus-section">
                    <h2>Akademiska Hus</h2>
                    <p class="c-phone"><img src="{{ URL::to('/') }}/images/phone-icon-white.svg" alt="">031-124 56703</p>
                    <p class="c-email"><img src="{{ URL::to('/') }}/images/email-icon-white.svg" alt="">mail.mailsson@mail.com</p>
                  </div>
                  <div class="jour">
                    <h2>Journummer</h2>
                    <p class="c-name">Chalmers</p>
                    <p class="c-phone"><img src="{{ URL::to('/') }}/images/phone-icon-white.svg" alt="">031-124 56703</p>
                  </div>
              </div>
              <button class="close-contact-menu" type="button" name="button"><img src="{{ URL::to('/') }}/images/close-white.svg" alt="">Stäng</button>

              </div>
              <div class="settings-side-menu">
                <div class="side-menu-header settings">
                  <h2>Inställningar</h2>
                  <img src="{{ URL::to('/') }}/images/settings-navbar.svg" alt="">
                </div>
                <div class="settings-text">
                  <a href="{{route('unset.campus')}}"><div class="change-campus"><div class="text-image"><img src="{{ URL::to('/') }}/images/byt-campus.svg" alt=""></div>Byt Campus</div></a>
                  <div class="notifications"><div class="text-image"><img src="{{ URL::to('/') }}/images/notifications.svg" alt=""></div>Notiser</div>
                  <div class="help"><div class="text-image"><img src="{{ URL::to('/') }}/images/hjalp.svg" alt=""></div>Hjälp</div>
                  <a href="{{route('login')}}"><div class="admin-login"><div class="text-image"><img src="{{ URL::to('/') }}/images/admin-login.svg" alt=""></div>Admin login</div></a>
                </div>
                <button class="close-settings-menu" type="button" name="button">Stäng<img src="{{ URL::to('/') }}/images/close-white.svg" alt=""></button>
              </div>
</div>
@endif
