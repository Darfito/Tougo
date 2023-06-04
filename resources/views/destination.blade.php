@extends('layouts.main')

@section('container')
    <section id="content">
        <div class="container">
            <div class="row">

              @foreach ($data as $item)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('storage/img_destination/' . $item->img) }}" class="card-img-top" alt="project1" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->province}}</h5>
                        </div>
                    </div>
                </div>
              @endforeach
                
                </div>
            </div>
    </section>
@endsection
