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

              {{-- contact side menu starts here --}}
              <div class="contact-side-menu">
                <div class="side-menu-header contact">
                  <i class="material-icons">phone</i>
                  <h2>Kontakt</h2>
                </div>
                <div class="contact-content">
                    <div class="campus-section">
                      <h2>{{$campus->name}}</h2>
                      <p>Data from database</p>
                      <p>Data from database</p>
                      <p>Data from database</p>
                      <p>Data from database</p>
                    </div>
                    <div class="akademiska-hus-section">
                      <h2>Akademiska Hus</h2>
                      <p>Växel: 031-63 24 00</p>
                      <p>E-post: info@akademiskahus.se</p>
                    </div>
                    <div class="jour">
                      <h2>Journummer</h2>
                      <p>Data from database</p>
                    </div>
                  <button class="close-contact-menu" type="button" name="button">STÄNG SKITEN</button>
              </div>
            </div> {{-- contact-side menu ends here --}}

            {{-- settings-side menu starts here --}}
              <div class="settings-side-menu">
                <button class="close-settings-menu" type="button" name="button">STÄNG SKITEN</button>
              </div>{{-- settings-side menu ends here --}}
</div>
