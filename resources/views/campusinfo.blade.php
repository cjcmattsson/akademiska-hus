@extends('layouts.default')

@section('content')
  <div class="campus-page-wrapper">


    <div class="campus-main-page">

  <div class="campus-header" style="background-image: url('{{ URL::to('/') }}/images/chalmers.gif')">

    <h1 class="header-hero">{{$campus->name}}</h1>
  </div>

  <div class="campus-info-and-contact">
    <div class="main-text-overlay"></div>
    <p class="paragraph-text main-text-campus">{{$campus->info}}</p>
    <button class="read-more" type="button" name="button">+</button>
    <div class="info-contact-buttons">
      <div class="button-and-text">
        <div class="button"><img class="" src="{{ URL::to('/') }}/images/sakerhet.svg" alt=""></div>
        <p>Säkerhet</p>
      </div>
      <div class="button-and-text">
        <div class="button"><div class="button"><img class="" src="{{ URL::to('/') }}/images/env-campus-page.svg" alt=""></div></div>
        <p>Miljöinfo</p>
      </div>
      <div class="button-and-text">
        <div class="button happening-notification"><img class="" src="{{ URL::to('/') }}/images/storningar.svg" alt=""></div>
        <p>Störningar</p>
      </div>
      <div class="button-and-text">
        <div class="button map"><img class="" src="{{ URL::to('/') }}/images/map-icon-campus-page.svg" alt=""></div>
        <p>Karta</p>
      </div>
    </div>

  </div>
</div>

  <div class="map-section">
      <div class="map" style="background-image: url('{{ URL::to('/') }}/images/map.png')">
        <h2>Karta</h2>
        <img src="{{ URL::to('/') }}/images/close.svg" alt="">
      </div>
      <div class="map-search">
          <input type="text" name="" value="" placeholder="SÖK">
      </div>
      <div class="map-section-icons">
        <div class="top-three">
          <div class="icon">
            <img src="{{ URL::to('/') }}/images/motesplats.svg" alt="">
            <p>Mötesplats</p>
          </div>
          <div class="icon">
            <img src="{{ URL::to('/') }}/images/wifi.svg" alt="">
            <p>Wifi</p>
          </div>
          <div class="icon">
            <img src="{{ URL::to('/') }}/images/salar.svg" alt="">
            <p>Salar</p>
          </div>
        </div>
        <div class="bottom-three">
          <div class="icon">
            <img src="{{ URL::to('/') }}/images/cafe.svg" alt="">
            <p>Cafe & <br> Resturanger</p>
          </div>
          <div class="icon">
            <img src="{{ URL::to('/') }}/images/bibliotek.svg" alt="">
            <p>Bibliotek</p>
          </div>
          <div class="icon">
            <img src="{{ URL::to('/') }}/images/cykel.svg" alt="">
            <p>Styr & <br>Ställ</p>
          </div>
        </div>
      </div>
  </div>

  <div class="urgent-error">
    <img class="close-error" src="{{ URL::to('/') }}/images/close.svg" alt="">
    <div class="error-message">
      <img src="{{ URL::to('/') }}/images/settings-navbar.svg" alt="">
      <div class="text-error">
        <p>Tisdag, 27 mars</p>
        <h2>Strömavbrott i biblioteket, Chalmers Tvärgatan 1 - förväntas tillbaka kl 16.</h2>
      </div>
    </div>
  </div>

</div>

@stop
