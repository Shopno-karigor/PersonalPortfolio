@extends('frontend.master')
@section('contact')
 <body>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-p">
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 page-content-wraper">
                <img src="{{ asset('images/final_icon.png') }}" alt="" class="fl">
                <h1 class="page-title">Say something</h1>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-conteiner">
                    <!-- //todo Google Map -->
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49105.55032811146!2d90.379842865006!3d23.82599917777975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6dcc038c2d1%3A0x63051604c8dc91d7!2s17%2C%206%20Matikata%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1648745919397!5m2!1sen!2sbd" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 cantact-form ">
                        <form class="" action="{{ route('contact.submit')}}" method="post" autocomplete="off" id="form">
                            @csrf
                            @if(Session('error'))
                                <h3 style="" class="text-danger text-center form-error">{{ Session('error') }}</h3>
                            @endif
                            @if(Session('success'))
                                <h3 style="" class="text-success text-center form-error">{{ Session('success') }}</h3>
                            @endif
                            <h3 style="" class="text-danger text-center"></h3>
                            <h5 class="text-danger-custom text-center" id="formError"></h5>
                            <div class="cantact-form-item">
                                <label class="">Your name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" oninput="nameValidation()">
                                <label for="">.</label>
                                @error('name')
                                    <p class="text-danger form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="cantact-form-item">
                                <label for="">Email</label>
                                <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" oninput="emailValidation()" onfocusout="emailPatternValidation()">
                                <label for="">.</label>
                                @error('email')
                                    <p class="text-danger form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="cantact-form-item">
                                <label for="">Suitable contact number</label>
                                <input type="text" name="phone" class="@error('phone') is-invalid @enderror" id="contact" value="{{ old('phone') }}" oninput="contactValidation()">
                                <label for="">.</label>
                                @error('phone')
                                    <p class="text-danger form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="cantact-form-item">
                                <label for="">Your comment, </label>
                                <textarea name="message" id="comment" oninput="commentValidation()">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-danger form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <p>
                                A quick check please. You know they are among us!
                            </p>
                            <div>
                                <div class="g-recaptcha" data-sitekey="6LczIxQeAAAAADR77ta9VA-Jqv3hcWa01s4r3Z9e"></div>
                                @error('g-recaptcha-response')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="cantact-form-item">
                                <input type="submit" name="" value="Submit">
                            </div>
                        </form>
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
  <!-- Additional script for this page -->
    <script src="{{ asset('js/contact.js') }}" charset="utf-8"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
    <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
            grecaptcha.execute('6LcbFxQeAAAAALo1OAXF9KhkOZozsDJaLlLYGKKD', {action: 'submit'}).then(function(token) {
                // Add your logic to submit to your backend server here.
            });
            });
        }
    </script>
@stop
