@extends('frontend.master')
@section('experience-view')
  <body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-p">
            
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 experience-view-page-content-wraper">
              <a href="{{ route('experience')}}"><img src="{{ asset('images/final_icon.png') }}" alt="" class="fl"></a>
              <h1 class="page-title">Technical Support Engineer</h1>
              <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 experience-view-conteiner">
                <h3 class="text-center experience-details-title">My journey with Microsoft</h3>
                <p class="experience-view-text">
                  My journey with Microsoft has begun under <u>Shanghai Wicresoft Co., Ltd</u>. After my graduation I have joined Wicresoft as a Technical Support Engineer for <u>Microsoft Shanghai</u>.
                  As a member of <u>Microsoft Asia Pacific support teams</u>, my key responsibility was troubleshooting technical issues for <u>Microsoft Exchange Online</u>, <u>Microsoft SharePoint</u> and <u>Microsoft Teams</u>.
                  In my one year career with Microsoft, I have resolved 900+ technical issues.
                </p>
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img src="{{ asset('images/company/MS-pic.jpeg') }}" alt="" class="fl img-responsive center-block">
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img src="{{ asset('images/company/MS-achivement.jpeg') }}" alt="" class="fl img-responsive center-block">
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img src="{{ asset('images/company/supportday1.jpeg') }}" alt="" class="fl img-responsive center-block">
                  </div>              
                </div>
                <p class="experience-view-text">
                  I have maintained a strong KPI profile with excellent customer feedback.
                </p>
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                  <div class="owl-carousel owl-theme col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div>
                      <img src="{{ asset('images/company/Verbatim.png') }}" alt="" class="fl img-responsive">
                    </div>
                    <div>
                      <img src="{{ asset('images/company/Verbatim1.png') }}" alt="" class="fl img-responsive">
                    </div>
                    <div>
                      <img src="{{ asset('images/company/Verbatim2.png') }}" alt="" class="fl img-responsive">
                    </div>
                    <div>
                      <img src="{{ asset('images/company/Verbatim3.png') }}" alt="" class="fl img-responsive">
                    </div>
                    <div>
                      <img src="{{ asset('images/company/Verbatim4.png') }}" alt="" class="fl img-responsive">
                    </div>
                    <div>
                      <img src="{{ asset('images/company/Verbatim5.png') }}" alt="" class="fl img-responsive">
                    </div>
                    <div>
                      <img src="{{ asset('images/company/Verbatim6.png') }}" alt="" class="fl img-responsive">
                    </div>
                    <div>
                      <img src="{{ asset('images/company/Verbatim7.png') }}" alt="" class="fl img-responsive">
                    </div>
                    <div>
                      <img src="{{ asset('images/company/Verbatim8.png') }}" alt="" class="fl img-responsive">
                    </div>
                    <div>
                      <img src="{{ asset('images/company/Verbatim9.png') }}" alt="" class="fl img-responsive">
                    </div>
                    <div>
                      <img src="{{ asset('images/company/Verbatim10.png') }}" alt="" class="fl img-responsive">
                    </div>
                  </div>         
                </div>
              </div>
              <!-- Menue -->
              @include('frontend.nav')
              <!-- Menue -->
            </div>     
          </div>
        </div>
      </div>
    </section>
  </body>
  @include('frontend.footer')
@endsection()
