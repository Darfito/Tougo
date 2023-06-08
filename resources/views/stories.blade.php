@extends('layouts.main')

@section('container')
    <main>
        <section id="Features">
            <div class="container">
                <div class="row mt-5 text-left mb-3">
                    <div class="col">
                        <h2>Features</h2>
                    </div>
                </div>
                <div class="row">

                  @foreach ($data as $item)
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <img src="{{ asset('storage/img_stories/' . $item->img) }}" class="card-img-top" alt="project1" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $item->city}}</h6>
                                {{-- <p class="card-text">{{ $item->konten}}</p> --}}
                                <a href="/stories/{{ $item->id }}" class="btn btn-primary">More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
