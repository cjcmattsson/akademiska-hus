@extends('layouts.default')

@section('content')
  <div class="admin-sub-navbar disturbances">
    <h2>Driftstörningar <span>(3)</span></h2>
    <button type="button" name="button">LÄGG TILL</button>
  </div>
  <div class="disturbances-sub-navbar">
    <div class="feed-nav-item" href="/">Aktiva</div>
    <div class="feed-nav-item" href="/">Kommande</div>
    <div class="feed-nav-item" href="/">Tidigare</div>
  </div>
  <div class="disturbance-wrapper">
    <div class="item-wrapper faq">
      <div class="text-and-buttons">
          <div class="small-top">
            <p class="date">2018-05-27 - 8.00-16.00</p>
            <p class="creator">Tony Wolf</p>
          </div>
          <div class="header-middle">
            <h2>Strömavbrott i Ljusgården - Förväntas vara åtgärdat kl 16</h2>
          </div>
          <div class="buttons-bottom">
            <button class="edit" type="button" name="button">VISA/REDIGERA</button>
            <button class="delete" type="button" name="button">TA BORT</button>
          </div>
      </div>
    </div>
    <div class="item-wrapper faq">
      <div class="text-and-buttons">
          <div class="small-top">
            <p class="date">2018-04-27 - 2018-05-12</p>
            <p class="creator">Tony Wolf</p>
          </div>
          <div class="header-middle">
            <h2>Entre B till Biblioteket är avstängd pga ombyggnation</h2>
          </div>
          <div class="buttons-bottom">
            <button class="edit" type="button" name="button">VISA/REDIGERA</button>
            <button class="delete" type="button" name="button">TA BORT</button>
          </div>
      </div>
    </div>
    <div class="item-wrapper faq">
      <div class="text-and-buttons">
          <div class="small-top">
            <p class="date">2018-04-27</p>
            <p class="creator">Tony Wolf</p>
          </div>
          <div class="header-middle">
            <h2>Vattnet är idag avstängt i Elektroteknik-huset</h2>
          </div>
          <div class="buttons-bottom">
            <button class="edit" type="button" name="button">VISA/REDIGERA</button>
            <button class="delete" type="button" name="button">TA BORT</button>
          </div>
      </div>
    </div>
    </div>
@stop
