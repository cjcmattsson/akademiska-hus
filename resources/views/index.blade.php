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
    <div class="campuses-list">
      <ul class="campus-list">
        @foreach ($cities as $city)
          <li class="city"><a>{{$city->campus_city}}<i class="material-icons add">add</i><i class="material-icons remove">remove</i></a>
            <ul class="campuses-in-city">
          @foreach ($city->campuses as $campus)
            <li><a href="" class="campus">{{$campus->name}}</a><i class="material-icons">keyboard_arrow_right</i></li>
          @endforeach
            </ul>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
  </div>
@endsection
