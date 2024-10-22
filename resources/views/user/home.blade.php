<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Maitika Military Clinics Preventive Medicine and Dahmani</title>

  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
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
    <div class="topbar py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-12 text-sm-left text-center">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +249921227016</a>
                        <span class="divider mx-2">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> almaldin999@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-4 col-12 text-right text-center text-sm-right">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <span class="navbar-brand"><span class="text-primary">اختار طبيبك</span></span>

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
                    <li class="nav-item mr-2">
                        <a class="nav-link btn btn-outline-primary px-3 py-2 rounded" href="{{ url('myappointment') }}">مواعيدي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark px-3 py-2 rounded" href="{{ url('appoint') }}">حجز مواعيد</a>
                    </li>
                    <x-app-layout></x-app-layout>
                    @else
                    <li class="nav-item">
                       <li class="nav-item mr-2">
                            <a class="btn btn-success btn-lg px-4 py-2 font-weight-bold" href="{{ url('register') }}">
                                تسجيل جديد
                            </a>
                            <li class="nav-item">
                            <a class="btn btn-primary btn-lg px-4 py-2 font-weight-bold" href="{{ url('login') }}">
                                تسجيل دخول
                            </a>
                            
                        </li>

                        </li>
                    </li>
                    

                    @endauth
                    
                    @endif
                    
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>

@if (session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="page-hero bg-image overlay-dark" style="background-image: url('../assets/img/home.webp');">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead font-weight-bold" style="font-size: 12px;">دعنا نجعل حياتك سعيدة</span>
            <div class="container text-center my-5">
                <div class="container text-center my-5">
                    <h1 class="h3 font-weight-bold text-primary d-inline-block" style="font-family: 'Tajawal', sans-serif;">
                      ﴾وَإِذَا مَرِضْتُ فَهُوَ يَشْفِينِ﴿
                    </h1>
                  </div>

              </div>

        </div>
    </div>
</div>

<div class="container py-5 text-center">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <a href="{{ url('/elwkhay') }}" class="btn btn-primary btn-block d-flex align-items-center">
                <img src="{{ asset('assets/img/m.PNG') }}" class="mr-2" style="width: 20px; height: 20px;">
                <h3 class="mb-0 ml-auto">عيادات الطب الوقائي</h3>
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="{{ url('/matega') }}" class="btn btn-primary btn-block d-flex align-items-center">
                <img src="{{ asset('assets/img/matega.jpeg') }}" class="mr-2" style="width: 20px; height: 20px;">
                <h3 class="mb-0 ml-auto">عيادات معيتيقة العسكري</h3>
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="{{ url('/eldahmani') }}" class="btn btn-primary btn-block d-flex align-items-center">
                <img src="{{ asset('assets/img/aldhmani.jpeg') }}" class="mr-2" style="width: 20px; height: 20px;">
                <h3 class="mb-0 ml-auto">عيادات مجمع زاوية الدهماني</h3>
            </a>
        </div>
    </div>
</div>



<div class="page-section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <h1>مرحبا بكم في عياداتكم</h1>
                <p class="text-grey mb-4" style="text-align: right; line-height: 1.8; font-size: 20px; color: #333; font-family: 'Tajawal', sans-serif; font-weight: 400;">
                    يعتبر الاطمئنان النفسي من أهم العوامل التي تساعد المريض في عملية الشفاء. فعندما يثق المريض في خطة العلاج وفي الفريق الطبي المعالج، يشعر براحة نفسية تسهم في تحسين استجابته للعلاج.<br><br>
                    الدعم النفسي والمعنوي من الأهل والأصدقاء يلعب دورًا كبيرًا في تعزيز هذه الثقة، مما يساعد المريض على التفاعل بإيجابية مع الأدوية والإجراءات الطبية.<br><br>
                    كما أن الإيمان بأن العلاج جزء من قدر الله، وأن الشفاء ممكن بفضل الله، يزيد من الإصرار والتفاؤل، مما يجعل المريض أكثر قدرة على تحمل الصعوبات.<br><br>
                    وفي ظل التقدم الطبي والعلمي، أصبحت العديد من الأمراض قابلة للعلاج، مما يمنح المرضى الأمل في استعادة صحتهم واستئناف حياتهم الطبيعية.<br><br>
                    لذا، على المريض أن يلتزم بتوجيهات الأطباء ويتقبل العلاج بصدر رحب، مستعينًا بالصبر والإيمان، فالأمل والتفاؤل هما جزء من رحلة الشفاء.
                </p>

            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                <div class="img-place custom-img-1">
                    <img src="../assets/img/doctor-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@include('user.doctor')
@include('user.Latest')

<footer class="page-footer bg-light">
    <div class="container">
        <div class="row px-md-3">
            <div class="col-sm-12 col-md-6 col-lg-3 py-3">
                <h5 class="mt-3 text-dark">Social Media</h5>
                <div class="footer-sosmed mt-3">
                    <a href="#" target="_blank" class="mx-2">
                        <span class="mai-logo-facebook-f" style="font-size: 18px;"></span>
                    </a>

                    <a href="#" target="_blank" class="mx-2">
                        <span class="mai-logo-instagram" style="font-size: 18px;"></span>
                    </a>
                </div>
            </div>
        </div>
        <hr class="my-3">
        <div class="text-center">
            <p class="text-dark mb-0">Copyright by almaldin yousif &copy; 2024</p>
        </div>
    </div>
</footer>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
