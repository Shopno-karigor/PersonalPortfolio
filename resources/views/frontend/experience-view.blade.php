<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Shopnokarigor</title>
      <!-- // todo Meta for facebook -->
      <!-- <meta name="description" content="Welcome to my portfolio. Here are some beautiful and creative work to show you">
      <meta property="og:url"                content="http://shopnokarigor.info/" />
      <meta property="og:type"               content="portfolio" />
      <meta property="og:title"              content="Personal Portfolio | Ratul" />
      <meta property="og:description"        content="I am a freelance web developer" />
      <meta property="og:image"              content="http://shopnokarigor.info/assets/images/icon_final.png" alt="shopnokarigor" />
      <meta name="keywords" content="Shopnokarigor, Ratul, Personal Portfolio, Wev developer, Wev designer, Portfolio, CEO" /> -->

     <link href="{{ asset('images/final_icon.png') }}" rel="icon" type="image/x-icon" />
     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
     <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
     <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('css/optimus.css') }}">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
   </head>

  <body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-p">
            
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 experience-view-page-content-wraper">
              <a href="<?= url('experience'); ?>"><img src="{{ asset('images/final_icon.png') }}" alt="" class="fl"></a>
              <h1 class="page-title">Work Experience/Microsoft</h1>
              <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 experience-view-conteiner">
                <h3 class="text-center experience-details-title">My journey @Microsoft</h3>
                <p class="experience-view-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img src="{{ asset('images/company/cover2.jpg') }}" alt="" class="fl img-responsive">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img src="{{ asset('images/company/cover2.jpg') }}" alt="" class="fl img-responsive">
                  </div>                  
                </div>
                <p class="experience-view-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 experience-left-sidebar animated fadeInRight">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 experience-left-sidebar-single-item">
                  <img src="{{ asset('images/company/sample.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 experience-left-sidebar-single-item">
                  <img src="{{ asset('images/company/sample.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 experience-left-sidebar-single-item">
                  <img src="{{ asset('images/company/sample.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 experience-left-sidebar-single-item">
                  <img src="{{ asset('images/company/sample.png') }}" alt="">
                </div>
              </div>
            </div>     
          </div>
        </div>
      </div>
    </section>
  </body>
  <script src="{{ asset('js/jquery.min.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/menu.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/menu-fixed.js') }}" charset="utf-8"></script>
</html>
