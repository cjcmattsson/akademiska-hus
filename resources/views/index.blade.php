@extends('layouts.default')

@section('content')
  <h1>HEJHEJHEJ</h1>
  <h2>emma testar</h2>
  <div class="campus-selection">
    <div class="search-campus">
      <input class="input-field-search-campus" type="text" name="" placeholder="Sök stad">
    </div>
    <ul class="campus-list">
      @foreach ($cities as $city)
        <li><a href="" class="campus">{{$city->campus_city}}</a></li>
      @endforeach
    </ul>
  </div>


@stop
