@extends('layouts.default-campus-selection')

@section('content')
  <div class="campus-selection-header">
    <i class="material-icons">radio</i>
  </div>
  <div class="campus-selection">
    <div class="search-content-wrapper">
    <h1>Välj campus</h1>
    <div class="campuses-search-and-list">
      <div class="search-campus">
        <input class="input-field-search-campus" type="text" name="" placeholder="Sök stad eller campus">
      </div>
      <ul class="campus-list">
        @foreach ($cities as $city)
          <li><a class="city">{{$city->campus_city}}</a></li>
          @foreach ($city->campuses as $campus)
            <li><a href="" class="campus">{{$campus->name}}</a></li>
          @endforeach
        @endforeach
      </ul>
    </div>
  </div>
  </div>


@stop
