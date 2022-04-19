@extends('frontend.master')
@section('certification')
  <body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-p">
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 page-content-wraper">
              <img src="{{ asset('images/final_icon.png') }}" alt="" class="fl">
              <h1 class="page-title">Achievements</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 certification-conteiner">
                <div class="badge-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  
                  <div class="badge-item col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <a href="{{url('images/badges/download4.png')}}" target="_blank">
                      <img src="{{ asset('images/badges/download4.png') }}" alt="Case Entitler" class="img-responsive center-block">
                    </a> 
                  </div>
                  <div class="badge-item col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <a href="{{url('images/badges/download5.png')}}" target="_blank">
                      <img src="{{ asset('images/badges/download5.png') }}" alt="Quiz Master" class="img-responsive center-block">
                    </a> 
                  </div>
                  <div class="badge-item col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <a href="{{url('images/badges/download6.png')}}" target="_blank">
                      <img src="{{ asset('images/badges/download6.png') }}" alt="Case Expert" class="img-responsive center-block">
                    </a> 
                  </div>
                  <div class="badge-item col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <a href="{{url('images/badges/download7.png')}}" target="_blank">
                      <img src="{{ asset('images/badges/download7.png') }}" alt="Customer Service Week 2021" class="img-responsive center-block">
                    </a> 
                  </div>
                  <div class="badge-item col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <a href="{{url('images/badges/download3.png')}}" target="_blank">
                      <img src="{{ asset('images/badges/download3.png') }}" alt="Gold Badge" class="img-responsive center-block">
                    </a> 
                  </div>
                  <div class="badge-item col-lg-2 col-md-2 col-sm-4 col-xs-12 m-t-5">
                    <a href="{{url('images/badges/Bncc_logo.png')}}" target="_blank">
                      <img src="{{ asset('images/badges/Bncc_logo.png') }}" alt="BNCC" class="img-responsive center-block">
                    </a> 
                  </div>
                </div>
                  <div class="training-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3>Achivements</h3>
                    <ul>
                        <li><b>Best Mentor</b>, Wicrecend Service Camp 1</li>
                        <li><b>Case Entitler</b>, Rave (Microsoft)</li>
                        <li><b>Quiz Master</b>, Rave (Microsoft)</li>
                        <li><b>Case Expert</b>, Rave (Microsoft)</li>
                        <li><b>Customer Service Week 2021</b>, Microsoft</li>
                        <li><b>Gold Badge</b>, Rave (Microsoft)</li>
                        <li><b>Cadet Under Officer</b>, Bangladesh National Cadet Corps</li>
                    </ul>
                </div>
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
