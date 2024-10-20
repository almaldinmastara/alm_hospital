<!DOCTYPE html>
<html lang="en">
    <html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Maitika Military Clinics Preventive Medicine and Dahmani</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span>+249921227016</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span>almaldin999@gmail.com</a>
            </div>
          </div>

          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">



              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">اختار طبيبك</a>

       <!-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> -->
        @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">



            @if(Route::has('login'))
            @auth

           <li class="nav-item" style="margin-right: 10px;">  <!-- تباعد إلى اليمين -->
    <a class="nav-link" style="background-color: #6495ED; color: #000000; border-radius: 20px; padding: 10px 20px; text-align: center;" href="{{ url('myappointment') }}">مواعيدي</a>
</li>

<li class="nav-item">
    <a class="nav-link" style="background-color: #3e3858; color: #FFFFFF; border-radius: 20px; padding: 10px 20px; text-align: center;" href="{{ url('appoint') }}">حجز مواعيد</a>
</li>



            <x-app-layout>

            </x-app-layout>

              @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ ('login') }}">تسجيل دخول</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ ('register') }}">تسجيل جديد</a>
              </li>
              @endauth
              @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if (session()->has('message'))

  <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">
       x
      </button>
      {{ session()->get('message') }}

  </div>

  @endif


  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/home.webp);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead" style="font-weight: bold;" font-size="12">دعنا نجعل حياتك سعيدة</span>
        <h1 class="display-4">﴾وَإِذَا مَرِضْتُ فَهُوَ يَشْفِينِ﴿</h1>
       <!-- <a href="#" class="btn btn-primary">Let's Consult</a> -->
      </div>
    </div>
  </div>


  <div align="center" style="padding: 40px;">
    <div style="display: flex; justify-content: center; gap: 20px;">

        <!-- الزر الأول -->
        <a href="{{ url('/elwkhay') }}" class="btn btn-primary" style="text-decoration: none; display: inline-flex; align-items: center;">
            <img src="{{ asset('assets\img\m.PNG') }}" class="button-icon" style="width: 20px; height: 20px; margin-right: 10px;">
           <h3> عيادات الطب الوقائي</h3>
        </a>

        <!-- الزر الثاني -->
        <a href="{{ url('/matega') }}" class="btn btn-primary" style="text-decoration: none; display: inline-flex; align-items: center;">
            <img src="{{ asset('assets\img\matega.jpeg') }}" class="button-icon" style="width: 20px; height: 20px; margin-right: 10px;">
           <h3> عيادات معيتيقة العسكري</h3>
        </a>

        <!-- الزر الثالث -->
        <a href="{{ url('/eldahmani') }}" class="btn btn-primary" style="text-decoration: none; display: inline-flex; align-items: center;">
            <img src="{{ asset('assets\img\aldhmani.jpeg') }}" class="button-icon" style="width: 20px; height: 20px; margin-right: 10px;">
           <h3>عيادات مجمع زاوية الدهماني</h3>
        </a>
    </div>
</div>


          <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>مرحبا بكم في  عياداتكم</h1>
            <p class="text-grey mb-4" style="text-align: right; line-height: 1.6; font-size: 18px; color: #555;">
                يعتبر الاطمئنان النفسي من أهم العوامل التي تساعد المريض في عملية الشفاء.
                 فعندما يثق المريض في خطة العلاج وفي الفريق الطبي المعالج، يشعر براحة نفسية تسهم في تحسين استجابته للعلاج.
                 الدعم النفسي والمعنوي من الأهل والأصدقاء يلعب دورًا كبيرًا في تعزيز هذه الثقة،
                 مما يساعد المريض على التفاعل بإيجابية مع الأدوية والإجراءات الطبية.
                 كما أن الإيمان بأن العلاج جزء من قدر الله وأن الشفاء ممكن بفضل الله يزيد من الإصرار والتفاؤل
                 ، مما يجعل المريض أكثر قدرة على تحمل الصعوبات.
                 وفي ظل التقدم الطبي والعلمي، أصبحت العديد من الأمراض قابلة للعلاج،
                مما يمنح المرضى الأمل في استعادة صحتهم واستئناف حياتهم الطبيعية. لذا،
                 على المريض أن يلتزم بتوجيهات الأطباء ويتقبل العلاج بصدر رحب،
                 مستعينًا بالصبر والإيمان، فالأمل والتفاؤل هما جزء من رحلة الشفاء.
            </p>
              <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/doctor-2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.doctor')

    @include('user.Latest')




  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">


      <!-- <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>
        </div>
    -->

          <div class="col-sm-6 col-lg-3 py-3">
          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p> Copyright by almaldin yousif &copy; 2024</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
