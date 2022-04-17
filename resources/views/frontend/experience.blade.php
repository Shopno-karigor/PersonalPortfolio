@extends('frontend.master')
@section('experience')
  <body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-p">
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 page-content-wraper">
              <img src="{{ asset('images/final_icon.png') }}" alt="" class="fl">
              <h1 class="page-title">Work experiences</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 experience-conteiner">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 animated fadeIn experience-item">
                  <div class="experience-item-img">
                    <div class="experience-item-img-content">
                      <img src="{{ asset('images/company/ms.png') }}" alt="" class="img-responsive center-block">
                    </div>
                  </div>
                  <a href="{{ route('workingonit')}}"><p class="experience-company">Technical Support Engineer</p></a>
                  <h5 class="text-center experience-institute">1 year 1 month (January 2021 to February 2022)</h5>
                  <p class="experience-title">Shanghai Wicresoft Co., Ltd.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 animated fadeIn experience-item">
                  <div class="experience-item-img">
                    <div class="experience-item-img-content">
                      <img src="{{ asset('images/company/dtlab.png') }}" alt="" class="img-responsive center-block">
                    </div>                    
                  </div>
                  <a href="{{ route('workingonit')}}"><p class="experience-company">Research and Teaching Assistant</p></a>
                  <h5 class="text-center experience-institute">1 year 10 months (March 2019 to January 2021)</h5>
                  <p class="experience-title">New Energy Measurement and Control Laboratory</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 animated fadeIn experience-item-1">
                  <div class="experience-item-img">
                    <div class="experience-item-img-content">
                      <img src="{{ asset('images/company/Eunited-logo.png') }}" alt="" class="img-responsive center-block">
                    </div>                    
                  </div>
                  <a href="{{ route('workingonit')}}"><p class="experience-company">Computer System Analyst</p></a>
                  <h5 class="text-center experience-institute">6 months (August 2018 to January 2019)</h5>
                  <p class="experience-title">Eunited Engineering Pte. Ltd.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 animated fadeIn experience-item-1">
                  <div class="experience-item-img">
                    <div class="experience-item-img-content">
                      <img src="{{ asset('images/company/DS logo.png') }}" alt="" class="img-responsive center-block">
                    </div>                    
                  </div>
                  <a href="{{ route('workingonit')}}"><p class="experience-company">IoT Engineer</p></a>
                  <h5 class="text-center experience-institute">4 months (November 2017 to February 2018)</h5>
                  <p class="experience-title">Datasoft Systems Bangladesh Limited</p>
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
@endsection()
