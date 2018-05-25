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
    <div class="enlarge-map"><i class="material-icons">open_with</i></div>
  </div>

  <div class="search-building">
    <h2><i class="material-icons">home</i> Sök byggnad</h2>
    <input class="search-field" type="text" name="" value="">
  </div>

    <div class="building-list">
      <div class="building">
        <div class="name-and-adress">
          <h3 class="building-name">Chalmers bibliotek</h3>
          <p class="building-adress-and-code"><span>Hejgatan 12</span><span>630524</span></p>
        </div>
        <div class="select-building">
          <button type="button" name="button">-></button>
        </div>
      </div>
      <div class="building">
        <div class="name-and-adress">
          <h3 class="building-name">Chalmers bibliotek</h3>
          <p class="building-adress-and-code"><span>Hejgatan 12</span><span>630524</span></p>
        </div>
        <div class="select-building">
          <button type="button" name="button">-></button>
        </div>
      </div>
      <div class="building">
        <div class="name-and-adress">
          <h3 class="building-name">Chalmers bibliotek</h3>
          <p class="building-adress-and-code"><span>Hejgatan 12</span><span>630524</span></p>
        </div>
        <div class="select-building">
          <button type="button" name="button">-></button>
        </div>
      </div>
      <div class="building">
        <div class="name-and-adress">
          <h3 class="building-name">Chalmers bibliotek</h3>
          <p class="building-adress-and-code"><span>Hejgatan 12</span><span>630524</span></p>
        </div>
        <div class="select-building">
          <button type="button" name="button">-></button>
        </div>
      </div>
      <div class="building">
        <div class="name-and-adress">
          <h3 class="building-name">Chalmers bibliotek</h3>
          <p class="building-adress-and-code"><span>Hejgatan 12</span><span>630524</span></p>
        </div>
        <div class="select-building">
          <button type="button" name="button">-></button>
        </div>
      </div>
      <div class="building">
        <div class="name-and-adress">
          <h3 class="building-name">Chalmers bibliotek</h3>
          <p class="building-adress-and-code"><span>Hejgatan 12</span><span>630524</span></p>
        </div>
        <div class="select-building">
          <button type="button" name="button">-></button>
        </div>
      </div>
    </div>
  </div>

<form class="" action="{{action('CreateReportController@sendReport')}}" method="post">
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
          <div class="take-image"><i class="material-icons">photo_camera</i>Ta bild</div>
          <div class="select-image"><i class="material-icons">add_to_photos</i>Välj Bild</div>
      </div>

      <div class="personal-info">
          <div class="name">
            <p class="label">Namn</p>
            <div class="input-and-check">
              <input type="text" name="name" value="" placeholder="Namn Namnsson">
              <i class="material-icons check-input">check_circle</i>
            </div>
          </div>
          <div class="phone">
            <p class="label">Telefon</p>
            <div class="input-and-check">
              <input type="text" name="telephone" value="" placeholder="0701234567">
              <i class="material-icons check-input">check_circle</i>
            </div>
          </div>
          <div class="email">
            <p class="label">Email</p>
            <div class="input-and-check">
              <input type="text" name="email" value="" placeholder="mail@mail.com">
              <i class="material-icons check-input">check_circle</i>
            </div>
          </div>
      </div>

      <div class="buttons">
        <button class="go-back" type="button" name="button">Gå Tillbaka</button>
        <button class="send-report" type="submit" name="button">Skicka Anmälan</button>
      </div>
  </div>
</form>


</div>

@stop
