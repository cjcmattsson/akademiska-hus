@extends('layouts.default')

@section('content')
  <h1 class="header-hero">HEJHEJHEJ</h1>
  <h2>emma testar</h2>
  <div class="campus-selection">
    <div class="search-campus">
      <input class="input-field-search-campus" type="text" name="" placeholder="Sök stad eller campus">
    </div>
    <ul class="campus-list">
      @foreach ($cities as $city)
          <li><a class="city">{{$city->campus_city}}</a></li>
        @foreach ($city->campuses as $campus)
          <li><a class="campus">{{$campus->name}}</a></li>
        @endforeach
      @endforeach
    </ul>
  </div>


@stop
