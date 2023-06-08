@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="css/tell.css" />
    <main>
    <div class="container">
      <h1 class="--judul">{{ $data -> name }}</h1>
      <p class="f-left">{{ $data->destination->province }} | {{ $data -> city }}</p>
      <p class="foto"> <img src="{{ asset('storage/img_stories/' . $data->img) }}" alt="" width="480px"/> </p>
      <br/>
      <p class="--konten">
        {{ $data -> konten }}
      </p>
    </div>
    </main>
@endsection


 {{-- | Destination <a href="#">{{ $destination -> province }}</a> --}}