@extends('layouts.campus')

@section('content')
  <div class="campus-selection-header">
    <h1>Campus</h1>
    <img class="start-logo" src="{{ URL::to('/') }}/images/start-logo.svg" alt="">
    <h1>kollen</h1>
  </div>



  <div class="campus-selection">
  <h2>Välj campus</h2>
    <input class="input-field-search-campus" type="text" name="" placeholder="Sök..">

    <div class="search-content-wrapper">
    <form class="campuses-list" action="{{route('store.campus')}}" method="post">
      @csrf
      <ul class="campus-list">
        @foreach ($cities as $city)
          <li class="city"><a>{{$city->campus_city}}<img class="add" src="{{ URL::to('/') }}/images/plus-dark.svg" alt=""><img class="remove" src="{{ URL::to('/') }}/images/minus-dark.svg" alt=""></a>
            <ul class="campuses-in-city">
          @foreach ($city->campuses as $campus)
            <li>
              <input class="radio" type="radio" name="campus" value="{{$campus->name}}" id="{{$campus->name}}">
              <label class="radioLabel" for="{{$campus->name}}">{{$campus->name}}</label>
              <img class="select-arrow" src="{{ URL::to('/') }}/images/arrow-right-dark.svg" alt=""></li>
          @endforeach
            </ul>
          </li>
        @endforeach
      </ul>
      <div class="select-campus-box">
        <p>Stämmer ditt val av:</p>
        <h2 class="name-of-clicked">Göteborgs Universitet</h2>
        <div class="button-box">
          <button class="wrong-campus" type="button" name="button">Nej</button>
          <button class="choose-campus" type="submit" name="button">Ja</button>
        </div>
      </div>
    </form>
  </div>
  </div>
@endsection
