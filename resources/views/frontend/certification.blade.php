@extends('frontend.master')
@section('certification')
  <body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-p">
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 page-content-wraper">
              <img src="{{ asset('images/final_icon.png') }}" alt="" class="fl">
              <h1 class="page-title">Certifications</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 certification-conteiner">
                  <div class="badge-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="badge-item col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <a href="{{url('https://bcert.me/sfwtbrtow')}}" target="_blank">
                          <img src="{{ asset('images/CSD_Cert.png') }}" alt="" class="img-responsive center-block">
                        </a>
                      </div>
                      <div class="badge-item col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <a href="{{url('/images/IoT.jpg')}}" target="_blank">
                          <img src="{{ asset('images/IoT.jpg') }}" alt="" class="img-responsive center-block">
                        </a> 
                      </div>
                      <div class="badge-item col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <a href="{{url('/images/bitm_cert.jpg')}}" target="_blank">
                          <img src="{{ asset('images/bitm_cert.jpg') }}" alt="" class="img-responsive center-block">
                        </a>
                      </div>
                  </div>
                  <div class="badge-title-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <ul>
                          <li><b>Certified Scrum Developer (CSD®)</b> (Scrum Alliance, Inc.)</li>
                          <li><b>IoT Engineer</b> (Department of MIS, University of Dhaka)</li>
                          <li><b>Web Application Development - PHP</b> (BITM)</li>
                      </ul>
                  </div>
                  <div class="training-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <h3>Professional training</h3>
                      <ul>
                          <li>CSS Compliance Training <b>(Microsoft)</b></li>
                          <li>Delivery Partner Advocate - Protecting Microsoft Customers <b>(Microsoft)</b></li>
                          <li>DDX Case Management for Delivery Partners <b>(Microsoft)</b></li>
                          <li>General Data Protection Regulation (GDPR) Training <b>(Microsoft)</b></li>
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
