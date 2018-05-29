@php
use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ett enklare och mer mobilt sätt att anmäla fel som uppstått i byggnader som administreras av Akademiska Hus.">
  <meta name="theme-color" content="#6FBC4D">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="mobile-web-app-capable" content="yes">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="manifest" href="{{ asset('manifest.json') }}">

  <link rel="shortcut icon" href="{{ asset('images/app-icon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('images/app-icon.png') }}">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Campuskollen</title>
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

  {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
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
