@extends('layouts.campus')

@section('content')
  <div class="start-page-wrapper">
    <img class="start-page-animation" src="{{ URL::to('/') }}/images/start-page-animation.gif" alt="">
    <img class="start-page-logo" src="{{ URL::to('/') }}/images/ahus-logo.png" alt="">
  </div>
@stop
