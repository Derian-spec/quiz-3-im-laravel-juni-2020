@extends('layouts.master')
@section('content')

<div class="container mt-5">
<form action="{{ url('/artikel') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="judul">Judul :</label>
    <input name="judul" type="text" class="form-control" placeholder="Masukkan Judul" id="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi :</label>
    <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="slug">Slug :</label>
    <input name="slug" type="text" class="form-control" placeholder="Masukkan slug" id="slug">
  </div>
  <div class="form-group">
    <label for="tag">tag :</label>
    <input name="tag" type="text" class="form-control" placeholder="Masukkan tag" id="tag">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>

@endsection