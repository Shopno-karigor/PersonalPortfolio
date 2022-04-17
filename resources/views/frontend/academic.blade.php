@extends('frontend.master')
@section('experience')
  <body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-p">
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 page-content-wraper">
              <img src="{{ asset('images/final_icon.png') }}" alt="" class="fl">
              <h1 class="page-title">Academics</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 experience-conteiner">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 animated fadeIn experience-item">
                  <div class="experience-item-img">
                    <div class="experience-item-img-content">
                      <img src="{{ asset('images/company/SWUST.png') }}" alt="" class="img-responsive center-block">
                    </div>
                  </div>
                  <a href="{{ url('http://www.english.swust.edu.cn/')}}" target="_blank"><h4 class="experience-company">Master of Engineering</h4></a>
                  <h5 class="text-center experience-institute">Control Science & Engineering</h5>
                  <p class="experience-title">Southwest University of Science and Technology</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 animated fadeIn experience-item">
                  <div class="experience-item-img">
                    <div class="experience-item-img-content">
                      <img src="{{ asset('images/company/BUBT-Logo.png') }}" alt="" class="img-responsive center-block">
                    </div>                    
                  </div>
                  <a href="{{ url('https://www.bubt.edu.bd/')}}" target="_blank"><h4 class="experience-company">Bachelor of Science</h4></a>
                  <h5 class="text-center experience-institute">Computer Science & Engineering</h5>
                  <p class="experience-title">Bangladesh University of Business & Technology</p>
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
