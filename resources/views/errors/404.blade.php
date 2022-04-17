@extends('frontend.master')
@section('experience')
  <body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-p">
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 page-content-wraper">
              <img src="{{ asset('images/final_icon.png') }}" alt="" class="fl">
              <h1 class="page-title">Oops! Are you lost?</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 experience-conteiner">
                <h1 style="font-family: 'Libre Baskerville', serif;">404</h1>
                <p>
                    <a href="{{ url()->previous() }}" style="font-family: 'Libre Baskerville', serif;">Return</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  @include('frontend.footer')
@endsection()
