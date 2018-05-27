@extends('layouts.default')

@section('content')
  <div class="admin-sub-navbar">
    <h2>Driftstörningar <span>(8)</span></h2>
    <button type="button" name="button">LÄGG TILL</button>
  </div>
    <h1>Driftstörningar</h1>

    @foreach ($reports as $report)
        <li>{{$report->name}} - {{$report->telephone}}</li>
    @endforeach
@stop
