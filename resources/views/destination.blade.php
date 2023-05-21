@extends('layouts.main')

@section('container')
        <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mt-3">
            <div class="card">
              <a href="#">
              <img
                src="../Assets/Image/jabar.jpg"
                class="card-img-top"
                alt="project1" />
              </a>
              <div class="card-body">
                  <h5 class="card-title">West Java</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card">
              <a href="#">
              <img
                src="../Assets/Image/jateng.jpg"
                class="card-img-top"
                alt="project1" />
              </a>
              <div class="card-body">
                  <h5 class="card-title">Central Java</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card">
              <a href="#">
              <img
                src="../Assets/Image/jatim.jpg"
                class="card-img-top"
                alt="project1" />
              </a>
              <div class="card-body">
                  <h5 class="card-title">East Java</h5>
              </div>
            </div>
          </div>
      </div>
    </section>
@endsection