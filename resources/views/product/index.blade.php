@extends('layout.conquer')

@section('content')
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Kategori ID</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($queryModel as $data)
      <tr>
        <th scope="row">{{ $data->id }}</th>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->deskripsi }}</td>
        <td>{{ $data->categori_id }}</td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
@endsection