@extends('frontend.master')
@section('workingonit')
  <body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-p">
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 page-content-wraper">
              <img src="{{ asset('images/final_icon.png') }}" alt="" class="fl">
              <h1 class="page-title">Opps! Still working on it</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 workingonit-conteiner">
                <img src="{{ asset('images/blog1.png') }}" alt="" class="img-responsive">                          
              </div>
            </div>
            <!-- Menue -->
            @include('frontend.nav')
            <!-- Menue -->
          </div>
        </div>
      </div>
    </section>
  </body>
  @include('frontend.footer')
@stop
