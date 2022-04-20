<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 menu-fixed  animated fadeInRight" id="menu-fixed">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menue-fixed-text">
        <ul>
        <a href="{{ route('/')}}"><li>Home</li></a>
        <a href="{{ route('portfolio')}}" :active="request()->routeIs('portfolio')"><li>Portfolio and skills</li></a>
        <a href="{{ route('experience')}}"><li>Work experiences</li></a>
        <a href="{{ route('certification')}}"><li>Certifications</li></a>
        <a href="{{ route('achievement')}}"><li>Achivements</li></a>
        <a href="{{ route('academic')}}"><li>Academics</li></a>
        <a href="{{ route('contact')}}"><li>Say something</li></a>
        <a href="{{ url('https://www.quora.com/profile/Ratul-26')}}" target="_blank"><li>Knowledge sharing</li></a>
        </ul>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 social">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a href="{{url('https://www.linkedin.com/in/mrratul/')}}"><img src="{{ asset('images/linkedin.png') }}" alt="Ratul-LinkedIn" ></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a href="{{url('https://docs.microsoft.com/en-us/users/ratulratul/')}}"><img src="{{ asset('images/msa.png') }}" alt="Ratul-MS"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a href="{{url('https://gitlab.com/shopno_karigor')}}"><img src="{{ asset('images/git.png') }}" alt="Ratul-Git"></a>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 m-t-5">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="{{url('https://dribbble.com/Shopno_Karigor')}}"><img src="{{ asset('images/Dribbble.png') }}" alt="Ratul-Dribbble"></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="{{url('https://github.com/Shopno-karigor')}}"><img src="{{ asset('images/git-hub.png') }}" alt="Ratul-Github" class="m-l-5"></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="{{url('https://stackoverflow.com/users/9618880/ratul')}}"><img src="{{ asset('images/stack-overflow.png') }}" alt="Ratul-Stack" class="m-l-5"></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="{{url('https://leetcode.com/mrratul/')}}"><img src="{{ asset('images/LeetCode.png') }}" alt="" class="m-l-5"></a>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 copy">
        <p>
            &copy {{"20".date("y")}}, Shopnokarigor                  
        </p>
    </div>
</div>