@extends('layouts.campus')

@section('content')
  <div class="campus-selection-header">
    <h1>Campus</h1>
    <i class="material-icons">radio</i>
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
          <li class="city"><a>{{$city->campus_city}}<i class="material-icons add">add</i><i class="material-icons remove">remove</i></a>
            <ul class="campuses-in-city">
          @foreach ($city->campuses as $campus)
            <li>
              <input class="radio" type="radio" name="campus" value="{{$campus->name}}" id="{{$campus->name}}">
              <label class="radioLabel" for="{{$campus->name}}">{{$campus->name}}</label>
              <i class="material-icons">keyboard_arrow_right</i></li>
          @endforeach
            </ul>
          </li>
        @endforeach
      </ul>
      <button type="submit" name="button">Choose Campus</button>
    </form>
  </div>
  </div>
@endsection
