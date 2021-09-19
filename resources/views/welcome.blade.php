@extends('layouts.app')

@section('content')
<style>
.bg {
  background-size: 100% 100%;
  height: 100vh;
}
h1  {
    font-family: Verdana, sans-serif;
    font-size: 300%;
    color: white;
    text-shadow: 0px 0px 7px black;
    }
h3  {
    font-family: Verdana, sans-serif;
    color: white;
    text-shadow: 0px 0px 7px black;
    }
.button {
  padding:0.6em 2em;
  border-radius: 8px;
  color:#000;
  background-color:#ffee00;
  font-size:1.1em;
  border:0;
  width:200px;
  padding-left: 50px;
  box-shadow: 1px 1px 7px grey;
}
a:hover {
    color:grey;
    text-decoration:none;
}
</style>
<section class="uk-section uk-padding-remove bg" style="background-image: linear-gradient(0deg, rgba(34,195,169,1) 0%, rgba(255,225,200,1) 100%);">
<br>
    <h1 class="uk-text-bolder uk-text-center">Sistem Permohonan Biasiswa</h1>
    <h3 class="uk-text-bold uk-text-center uk-margin-remove">Yayasan Islam Kelantan</h3><br>
    <a href="/permohonan" class="button uk-align-center"><span uk-icon="icon: chevron-double-right; ratio: 1.5"></span> Mohon Sekarang</a>
</section>
@endsection