@extends('layouts.default')

@section('content')
  <div class="admin-sub-navbar disturbances">
    <h2>Driftstörningar <span>(8)</span></h2>
    <button type="button" name="button">LÄGG TILL</button>
  </div>
  <div class="disturbances-sub-navbar">
    <div class="feed-nav-item active-feed-nav-item" href="/">Aktiva</div>
    <div class="feed-nav-item" href="/">Kommande</div>
    <div class="feed-nav-item" href="/">Tidigare</div>
  </div>
@stop
