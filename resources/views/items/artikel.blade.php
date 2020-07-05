@extends('layouts.master')
@section('content')

<div class="container mt-5">
<div class="card px-2 py-4">
<a href="/artikel/create">
<button type="submit" class="btn btn-primary">Tambah Artikel</button></a>
<table class="table table-dark table-hover mt-2">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Slug</th>
        <th>tag</th>
        <th>Detail</th>
      </tr>
    </thead>
    <tbody>
      @foreach($artikel as $atk)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $atk->judul }}</td>
        <td>{{ $atk->isi }}</td>
        <td>{{ $atk->slug }}</td>
        <td>{{ $atk->tag }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>

@endsection