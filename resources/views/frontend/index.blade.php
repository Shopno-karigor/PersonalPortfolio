@extends('frontend.master')
@section('index')
<body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner clear-p">
            <div class="banner-image-container" style="background-image: url({{ asset('images/banner/banner1.jpg') }});"></div>
            <div class="banner-text">
              <span id="stringPrev">Jack of some trades, master of some, though oftentimes </span>
              <span id="string"  style="display:none;">better than master of one..!</span>
              <span id="typed2"></span>
            </div>
            <div class="banner-batch">
              Problem solver / Developer / Learner
            </div>
            <div class="banner-link">
              <a href="{{ url('https://www.linkedin.com/in/mrratul/')}}"><img src="{{ asset('images/linkedin.png') }}" alt=""></a>
              <a href="{{ url('https://docs.microsoft.com/en-us/users/ratulratul/')}}" class="m-l-5"><img src="{{ asset('images/msa.png') }}" alt=""></a>
              <a href="{{ url('https://gitlab.com/shopno_karigor')}}" class="m-l-5"><img src="{{ asset('images/git.png') }}" alt=""></a>
              <a href="{{ url('https://dribbble.com/Shopno_Karigor')}}" class="m-l-5"><img src="{{ asset('images/Dribbble.png') }}" alt=""></a>
              <a href="{{ url('https://github.com/Shopno-karigor')}}" class="m-l-5"><img src="{{ asset('images/git-hub.png') }}" alt=""></a>
              <a href="{{ url('https://stackoverflow.com/users/9618880/ratul')}}" class="m-l-5"><img src="{{ asset('images/stack-overflow.png') }}" alt=""></a>
            </div>
            <div class="menue-icon ">
              <img src="{{ asset('images/menue-icon.png') }}" alt="" class="img-responsive animated" id="menu-hide">
            </div>
            <div class="profile-pic">
              <img src="{{ asset('images/profile/profile-pic.jpg') }}" alt="" class="img-responsive img-circle">
            </div>
            <!-- Menu -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 menu  animated hide" id="menu">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cross">
                <img src="{{ asset('images/cross.png') }}" alt="" id="menu-expand">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menue-text">
                <ul>
                  <a href="{{ route('/')}}" :active="request()->routeIs('/')"><li>Home</li></a>
                  <a href="{{ route('portfolio')}}" :active="request()->routeIs('portfolio')"><li>Portfolio & skills</li></a>
                  <a href="{{ route('experience')}}"><li>Work experiences</li></a>
                  <a href="{{ route('certification')}}"><li>Certifications</li></a>
                  <a href="{{ route('achievement')}}"><li>Achivements</li></a>
                  <a href="{{ route('academic')}}"><li>Academics</li></a>
                  <a href="{{ route('contact')}}"><li>Say something</li></a>
                  <a href="https://www.quora.com/profile/Ratul-26" target="_blank"><li>Knowledge sharing</li></a>
                </ul>
                <p class="copy">
                  &copy {{"20".date("y")}}, Shopnokarigor
                </p>
              </div>
              
            </div>
            <!-- Menu -->
          </div>
        </div>
      </div>
    </section>
</body>
  <!-- Additional script for this page -->
  <script src="{{ asset('js/jquery.min.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/menu.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/typed.min.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/demos.js') }}" charset="utf-8"></script>
@stop
