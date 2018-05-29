@php
use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  @include('layouts/head')
</head>
<body>

@if(!Auth::check())
  @include('partials/top-navigation')
@else
  @include('partials/top-navigation-admin')
@endif
  <main>
    @yield('content')
  </main>

  @include('partials/bot-navigation')

    <script>
      if (document.getElementById('map')) {
        function initMap() {
          var chalmers = {lat: 57.68923439454743, lng: 11.974024772644043};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: chalmers,
            disableDefaultUI: true,
          })
        }
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpefHCKXmsWWDQMEYgSB38FYt2S9T4b6I&callback=initMap"></script>
  <script src="js/app.js"></script>
</body>
</html>
