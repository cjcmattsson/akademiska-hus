@extends('layouts.default')

@section('content')
<div class="feed-nav-bar">
  <div class="feed-nav-item aha-nav" href="/">AHA</div>
  <div class="feed-nav-item campus-nav" href="/">Campus</div>
  <div class="feed-nav-item questions-nav" href="/">Frågor</div>
</div>

<div class="content-feed">
  <div class="news-feed">

    {{-- AHA FEED --}}
    <div class="aha">
      <div class="aha-feed-item">
        <div class="feed-item-text-and-button">
          <div class="text">
            <h3>Studenter flockas till Amsterdam</h3>
          </div>
          <button type="button" name="button">Läs mer</button>
        </div>
      </div>
      <div class="feed-item-smaller">
        <div class="image"></div>
        <div class="text-right">
          <div class="top-text">
            <p>Rum för lärande</p>
            <h3>Vi behöver fler relaxytor i våra miljöer</h3>
          </div>
          <div class="bot-text-and-button">
            <p>Katarina Blasson, docent i Bla & bla</p>
            <button type="button" name="button"><i class="material-icons">keyboard_arrow_right</i></button>
          </div>
        </div>
      </div>
      <div class="aha-feed-item">
        <div class="feed-item-text-and-button">
          <div class="text">
            <h3>Studenter flockas till Amsterdam</h3>
          </div>
          <button type="button" name="button">Läs mer</button>
        </div>
      </div>
      <div class="aha-feed-item">
        <div class="feed-item-text-and-button">
          <div class="text">
            <h3>Studenter flockas till Amsterdam</h3>
          </div>
          <button type="button" name="button">Läs mer</button>
        </div>
      </div>
      <div class="feed-item-smaller">
        <div class="image"></div>
        <div class="text-right">
          <div class="top-text">
            <p>Rum för lärande</p>
            <h3>Vi behöver fler relaxytor i våra miljöer</h3>
          </div>
          <div class="bot-text-and-button">
            <p>Katarina Blasson, docent i Bla & bla</p>
            <button type="button" name="button"><i class="material-icons">keyboard_arrow_right</i></button>
          </div>
        </div>
      </div>
    </div>

    {{-- CAMPUS FEED --}}
    <div class="campus">
      <div class="feed-item-smaller">
        <div class="image"></div>
        <div class="text-right">
          <div class="top-text">
            <p>Rum för lärande</p>
            <h3>Vi behöver fler relaxytor i våra miljöer</h3>
          </div>
          <div class="bot-text-and-button">
            <p>Katarina Blasson, docent i Bla & bla</p>
            <button type="button" name="button"><i class="material-icons">keyboard_arrow_right</i></button>
          </div>
        </div>
      </div>
      <div class="feed-item-smaller">
        <div class="image"></div>
        <div class="text-right">
          <div class="top-text">
            <p>Rum för lärande</p>
            <h3>Vi behöver fler relaxytor i våra miljöer</h3>
          </div>
          <div class="bot-text-and-button">
            <p>Katarina Blasson, docent i Bla & bla</p>
            <button type="button" name="button"><i class="material-icons">keyboard_arrow_right</i></button>
          </div>
        </div>
      </div>
      <div class="feed-item-smaller">
        <div class="image"></div>
        <div class="text-right">
          <div class="top-text">
            <p>Rum för lärande</p>
            <h3>Vi behöver fler relaxytor i våra miljöer</h3>
          </div>
          <div class="bot-text-and-button">
            <p>Katarina Blasson, docent i Bla & bla</p>
            <button type="button" name="button"><i class="material-icons">keyboard_arrow_right</i></button>
          </div>
        </div>
      </div>
      <div class="feed-item-smaller">
        <div class="image"></div>
        <div class="text-right">
          <div class="top-text">
            <p>Rum för lärande</p>
            <h3>Vi behöver fler relaxytor i våra miljöer</h3>
          </div>
          <div class="bot-text-and-button">
            <p>Katarina Blasson, docent i Bla & bla</p>
            <button type="button" name="button"><i class="material-icons">keyboard_arrow_right</i></button>
          </div>
        </div>
      </div>
      <div class="feed-item-smaller">
        <div class="image"></div>
        <div class="text-right">
          <div class="top-text">
            <p>Rum för lärande</p>
            <h3>Vi behöver fler relaxytor i våra miljöer</h3>
          </div>
          <div class="bot-text-and-button">
            <p>Katarina Blasson, docent i Bla & bla</p>
            <button type="button" name="button"><i class="material-icons">keyboard_arrow_right</i></button>
          </div>
        </div>
      </div>
      <div class="feed-item-smaller">
        <div class="image"></div>
        <div class="text-right">
          <div class="top-text">
            <p>Rum för lärande</p>
            <h3>Vi behöver fler relaxytor i våra miljöer</h3>
          </div>
          <div class="bot-text-and-button">
            <p>Katarina Blasson, docent i Bla & bla</p>
            <button type="button" name="button"><i class="material-icons">keyboard_arrow_right</i></button>
          </div>
        </div>
      </div>
  </div>


      <div class="q-and-a">
          <ul class="expander-box">
            <h3>Hur jobbar ni för att minska energiförbrukningen?</h3>
            <li class="answer-box">
              <p>Dummy answer text text text text.</p>
            </li>
          </ul>

          <ul class="expander-box">
            <h3>Hur bestäms hyresnivåerna på era lokaler?</h3>
            <li class="answer-box">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer laoreet convallis eros sed sollicitudin. Etiam massa lorem,
                lacinia sit amet lorem sit amet, sollicitudin porta nulla.
              </p>
            </li>
          </ul>
      </div>
    </div>
  </div>
</div>
@stop
