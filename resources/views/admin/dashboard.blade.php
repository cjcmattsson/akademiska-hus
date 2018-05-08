@extends('layouts.default')

@section('content')
    <h1>Dashboard</h1>

    @foreach ($reports as $report)
        <li>{{$report->title}} - {{$report->phone}}</li>
    @endforeach
@stop
