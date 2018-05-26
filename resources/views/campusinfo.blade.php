@extends('layouts.default')

@section('content')
  {{-- style="background-image: url('{{}}')" --}}
  <div class="campus-header">

    <h1 class="header-hero">{{$campus->name}}</h1>
  </div>

  <div class="campus-info-and-contact">
    <div class="main-text-overlay"></div>
    <p class="paragraph-text main-text-campus">{{$campus->info}}</p>
    <button class="read-more" type="button" name="button">+</button>
    <div class="info-contact-buttons">
      <div class="button-and-text">
        <div class="button"><img class="" src="{{ URL::to('/') }}/images/plus-dark.svg" alt=""></div>
        <p>Kontakt</p>
      </div>
      <div class="button-and-text">
        <div class="button"><div class="button"><img class="" src="{{ URL::to('/') }}/images/env-campus-page.svg" alt=""></div></div>
        <p>Miljöinfo</p>
      </div>
      <div class="button-and-text">
        <div class="button happening-notification"><i class="material-icons">phone</i></div>
        <p>På gång</p>
      </div>
      <div class="button-and-text">
        <div class="button"><img class="" src="{{ URL::to('/') }}/images/map-icon-campus-page.svg" alt=""></div>
        <p>Karta</p>
      </div>
    </div>

  </div>

@stop
