@extends('layouts.master')
@section('content')

<div class="container mx-3 my-4">
<div class="card px-3">
  <h1> User </h1> <br>
  <p>Judul : {{$user->userName}} </p> <br>
  <p>Isi : {{$user->userEmail}} </p> <br>

  <h1> Artikel </h1> <br>
  @foreach($artikel as $atk)
    <p>{{$atk->judul}}, {{$atk->isi}}, {{$atk->slug}}, {{$atk->tag}}</p> <br>
  @endforeach

</div>
</div>

@endsection