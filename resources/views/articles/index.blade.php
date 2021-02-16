@extends('layouts.main')

@section('content')
  <h1 class="mt-5 mb-5">Lista di articoli</h1>
  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>  
        <th>Titolo</th>  
        <th>Sottotitolo</th>  
        <th>Autore</th>  
        <th>Data di publbicazione</th>  
      </tr>  
    </thead>
    <tbody>
      @foreach ($articles as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->subtitle }}</td>
            <td>{{ $item->author }}</td>
            <td>{{ $item->publication_date }}</td>
          </tr>
      @endforeach

    </tbody>
  </table>
@endsection