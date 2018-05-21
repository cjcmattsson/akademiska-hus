@extends('layouts.default')

@section('content')

<div class="report-first-page">

  <div class="report-map">
    <div class="report-header">
      <h1>Felanmälan - Sök byggnad</h1>
      <p>Steg 1 av 2</p>
    </div>
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
    </div>

    {{-- <form class="reportForm" action=""{{route('send.report')}}"" method="post">

      @csrf

      <label for="title">Rubrik på felanmällan</label>
        <input type="text" name="title" value="">
        <br>
      <label for="status">Typ av fel</label>
        <input type="radio" name="status" value="el">
        <input type="radio" name="status" value="vatten">
        <input type="radio" name="status" value="skrivare">
        <input type="radio" name="status" value="övrigt">
        <br>
      <label for="body">Beskrivning av fel</label>
        <textarea name="body" value="" style="resize: none;"></textarea>
        <br>
      <label for="phone">Om du vill ha återkoppling i ärendet, skriv ert telefonnummer</label>
        <input type="text" name="phone" value="">
        <br>
      <button type="submit">Skicka Felanmällan</button>
        @include('partials/errors')
    </form> --}}
  </div>


@stop
