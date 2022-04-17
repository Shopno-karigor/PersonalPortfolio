@extends('frontend.master')
@section('portfolio')
  <body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-p">
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 page-content-wraper">
              <img src="{{ asset('images/final_icon.png') }}" alt="" class="fl">
              <h1 class="page-title">Portfolio and skills</h1>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 skill-conteiner">
                <h3 class="text-center protfolio-title">Jack of some trades</h3>
                <h5 class="text-center protfolio-sub-title">I solve problems. Always try to keep things simple.</h5>
                <p class="portfolio-text">
                    + Learning and working with <span class="php-badge badge-custom badge">PHP</span>  for the last 5 years. Started <span class="laravel-badge badge-custom badge">Laravel</span> recently.<br>
                    + Also a front-end guy. I can write <span class="html-badge badge-custom badge">HTML and CSS</span> from scratch to production. Love <span class="botstrap-badge badge-custom badge">Bootstrap</span>.  <br> 
                    + An Amature javaScript developer. Sometimes, things get complex when I approach this script. <br>
               </p>
               <p class="portfolio-text">
                   + <a href="http://childcarebus.sg/" target="_blank" class="text-underline">ChildCare Bus Singapore</a> is one of my <span class="fullstack-badge badge-custom badge">Full-stack</span> projects. Did it as a one-man army. <br>
                   + Worked as a <span class="manager-badge badge-custom badge">Team Lead</span> for <a href="https://goshare.sg/" target="_blank" class="text-underline">GoShare Singapore.</a>
               </p>
               <p class="portfolio-text">
                   + I am also a <span class="researcher-badge badge-custom badge">Researcher</span>. I learn it when I was working as a full-time researcher at the New Energy Measurement and Control Laboratory (Southwest University of Science and Technology, Sichuan, China). If time permits please feel free to have a look at some of my research works. <br>
                   <ul class="portfolio-text-ul">
                       <li><a href="https://www.researchgate.net/profile/Ratul-Ratul-2" target="_blank">ResearchGate</a></li>
                       <li><a href="https://doi.org/10.1016/C2020-0-03232-9" target="_blank">Co-author of "Battery System Modeling"</a></li>
                       <li><a href="https://oversea.cnki.net/kcms/detail/detail.aspx?filename=1021638311.nh&dbcode=CMFD&dbname=CMFD2021&v=" target="_blank">"State of Safety Prediction of Power Lithium Ion Batteries in Context of Aging and Capacity Fade for Electric Vehicles"</a></li> 
                   </ul>
               </p>
               <p class="portfolio-text">
                    + As a Technical Support Engineer for Microsoft, I have learned  <span class="customer-badge badge-custom badge">Customer Management</span> and <span class="soft-badge badge-custom badge">Soft Skill</span>. <br>
                    + Well! While Soft Skill helps to increase my public communication strength, I am also a Subject Matter Expert of <span class="exo-badge badge-custom badge">Exchange Online</span>, <span class="spo-badge badge-custom badge">SharePoint Online</span>, and <span class="teams-badge badge-custom badge">Microsoft Teams</span>.     
               </p>
                         
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
