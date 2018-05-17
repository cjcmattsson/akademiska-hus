@extends('layouts.default')

@section('content')
  {{-- style="background-image: url('{{}}')" --}}
  <div class="campus-header">

    <h1 class="header-hero">{{$campus->name}}</h1>
  </div>

  <div class="campus-info-and-contact">
    <p class="paragraph-text">{{$campus->info}}</p>
    <div class="info-contact-buttons">
      <div class="button-and-text">
        <div class="button"></div>
        <p>Kontakt</p>
      </div>
      <div class="button-and-text">
        <div class="button"></div>
        <p>Miljöinfo</p>
      </div>
      <div class="button-and-text">
        <div class="button happening-notification"></div>
        <p>På gång</p>
      </div>
      <div class="button-and-text">
        <div class="button"></div>
        <p>Karta</p>
      </div>
    </div>

  </div>

@stop
