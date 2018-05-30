@extends('layouts.default')

@section('content')

<div class="report-wrapper">

<div class="report-first-page">

  <div class="report-map">
    <div id="map"></div>
    <div class="report-header first">
      {{-- <div ></div> --}}
      <h1>Felanmälan - Sök byggnad</h1>
      <p>Steg 1 av 2</p>
    </div>
    <div class="enlarge-map"><img src="{{ URL::to('/') }}/images/fullscreen.svg" alt=""></div>
  </div>

  <div class="search-building">
    <h2><img src="{{ URL::to('/') }}/images/search-building.svg" alt=""> Sök byggnad</h2>
    <input class="search-field" type="text" name="" value="">
  </div>

    <div class="building-list">
      @foreach ($buildings as $building)
      <div class="building">
        <div class="name-and-adress">
          <h3 class="building-name">{{$building->name}}</h3>
          <p class="building-adress-and-code"><span>{{$building->adress}}</span><span>{{$building->code}}</span></p>
        </div>
        <div class="select-building">
           <img src="{{ URL::to('/') }}/images/right-arrow-purple.svg" alt="">
        </div>
      </div>
    @endforeach
    </div>
  </div>

<form id="report-form" class="report-form" action="{{action('CreateReportController@sendReport')}}" method="post">
@csrf
  <div class="report-second-page">
      <div class="report-header second">
        <h1>Felanmälan - Beskriv fel</h1>
        <p>Steg 2 av 2</p>
      </div>

      <div class="describe-problem">
        <h2><i class="material-icons">warning</i> Beskriv fel</h2>
        <textarea name="description" class="describe-field" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder ='Ex: En fläktpanel hänger snett i sal 12. Se bifogad bild'" placeholder="Ex: En fläktpanel hänger snett i sal 12. Se bifogad bild"></textarea>
        <p>Lämna gärna ett rumsnummer eller annan indikation på vart felet finns</p>
      </div>

      <div class="take-or-select-image">
        <label class="take-image" for="image"><i class="material-icons">photo_camera</i>Ta bild</label>
        <input class="input-image" type="file" name="image" value="" id="image">

        <label class="select-image" for="image"><i class="material-icons">add_to_photos</i>Välj Bild</label>
        <input class="input-image" type="file" name="image" value="" id="image">
          {{-- <div class="take-image"><i class="material-icons">photo_camera</i>Ta bild</div> --}}
          {{-- <div class="select-image"><i class="material-icons">add_to_photos</i>Välj Bild</div> --}}

      </div>

      <div class="personal-info">
          <div class="name">
            <div class="img-and-label">
              <img class="report-contact-icon" src="{{ URL::to('/') }}/images/name-icon.svg" alt="">
              <p class="label">Namn</p>
            </div>
            <div class="input-and-check">
              <input type="text" name="name" value="" placeholder="Namn Namnsson">
              <i class="material-icons check-input">check_circle</i>
            </div>
          </div>
          <div class="phone">
            <div class="img-and-label">
              <img class="report-contact-icon" src="{{ URL::to('/') }}/images/phone-icon.svg" alt="">
              <p class="label">Telefon</p>
            </div>
            <div class="input-and-check">
              <input type="text" name="telephone" value="" placeholder="0701234567">
              <i class="material-icons check-input">check_circle</i>
            </div>
            <p class="reason">Vi ber om ert telefonnummer för att enkelt kunna nå er om frågor kring felet uppstår</p>
          </div>
          <div class="email">
            <div class="img-and-label">
              <img class="report-contact-icon" src="{{ URL::to('/') }}/images/email-icon.svg" alt="">
              <p class="label">Email</p>
            </div>
            <div class="input-and-check">
              <input type="text" name="email" value="" placeholder="mail@mail.com">
              <i class="material-icons check-input">check_circle</i>
            </div>
            <p class="reason">Vi återkopplar till er per mail när felet är åtgärdat</p>
          </div>
      </div>

      <div class="buttons">
        <button class="go-back" type="button" name="button">Gå Tillbaka</button>
        <button class="send-report" type="button" name="button">Skicka Anmälan</button>
      </div>
  </div>
</form>

<div class="report-thanks-message">
  <h2>Tack! <br> Din felanmällan skickas</h2>
  <div class="loading-gif-div">
    <img class="loading-gif-report" src="{{ URL::to('/') }}/images/loading.gif" alt="">
  </div>
</div>
</div>

@stop
