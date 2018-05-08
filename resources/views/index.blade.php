@extends('layouts.default')

@section('content')
  <h1>HEJHEJHEJ</h1>
  <h2>emma testar</h2>
  <p><button onclick="clickCounter()" type="button">Click me!</button></p>
  <div id="result"></div>
  <p>Click the button to see the counter increase.</p>
  <script>
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script>
@stop
