@extends('layouts.default')

@section('content')

<br>
    <form class="reportForm" action=""{{route('send.report')}}"" method="post">

      @csrf

      <label for="title">Rubrik på felanmällan</label>
        <input type="text" name="title" value="">
        <br>
      <label for="status">Typ av fel</label>
        <input type="radio" name="status" value="el">
        <input type="radio" name="status" value="vatten">
        <input type="radio" name="status" value="skrivare">
        <input type="radio" name="status" value="övrigt">
        <br>
      <label for="body">Beskrivning av fel</label>
        <textarea name="body" value="" style="resize: none;"></textarea>
        <br>
      <label for="phone">Om du vill ha återkoppling i ärendet, skriv ert telefonnummer</label>
        <input type="text" name="phone" value="">
        <br>
      <button type="submit">Skicka Felanmällan</button>
        @include('partials/errors')
    </form>


@stop
