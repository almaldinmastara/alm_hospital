<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Ajwa&display=swap" rel="stylesheet">
        <meta name="copyright" content="MACode ID, https://macodeid.com/">

        <title>Maitika Military Clinics Preventive Medicine and Dahmani</title>

        <!-- إضافة الخطوط الخاصة -->
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">

        <!-- إضافة الأيقونة الخاصة بالمتصفح -->
        <link rel="icon" href="{{ asset('assets/img/matega.jpeg') }}" type="image/x-icon">

        <!-- إضافة أيقونات متعددة الدقة -->
        <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">
        <link rel="icon" sizes="192x192" href="{{ asset('assets/img/android-chrome-192x192.png') }}">
        <link rel="icon" sizes="512x512" href="{{ asset('assets/img/android-chrome-512x512.png') }}">

        <!-- إضافة ملفات CSS -->
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
                        <!-- Link for calling the number -->
                        <a href="tel:+218916624444"><span class="mai-call text-primary"></span>091-6624444</a>
                        <span class="divider mx-2">|</span>
                        <!-- Link for emailing, opening the email client for a new message -->
                        <a href="mailto:hospitalmedicine77@gmail.com"><span class="mai-mail text-primary"></span>hospitalmedicine77@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-4 col-12 text-right text-center text-sm-right">
                    <div class="social-mini-button">
                        <a href="https://www.facebook.com/profile.php?id=100083196887841"><span class="mai-logo-facebook-f"></span></a>
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
                   <!-- <li class="nav-item mr-2">
                        <a class="nav-link btn btn-outline-primary px-3 py-2 rounded" href="{{ url('myappointment') }}">مواعيدي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark px-3 py-2 rounded" href="{{ url('appoint') }}">حجز مواعيد</a>
                    </li>  -->
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
            <span class="subhead font-weight-bold" style="font-size: 12px,font-family: 'Ajwa';">دعنا نجعل حياتك سعيدة</span>
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
        <!-- Button 1 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="{{ url('/elwkhay') }}"
               class="btn btn-info btn-block d-flex align-items-center justify-content-center shadow-lg p-3 rounded">
                <img src="{{ asset('assets/img/m.PNG') }}"
                     class="mr-3 rounded-circle border border-light"
                     style="width: 40px; height: 40px;">
                <span class="font-weight-bold" style="font-size: 1.2rem;">عيادات الطب الوقائي</span>
            </a>
        </div>

        <!-- Button 2 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="{{ url('/matega') }}"
               class="btn btn-warning btn-block d-flex align-items-center justify-content-center shadow-lg p-3 rounded">
                <img src="{{ asset('assets/img/matega.jpeg') }}"
                     class="mr-3 rounded-circle border border-light"
                     style="width: 40px; height: 40px;">
                <span class="font-weight-bold" style="font-size: 1.2rem;">عيادات معيتيقة العسكري</span>
            </a>
        </div>

        <!-- Button 3 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="{{ url('/eldahmani') }}"
               class="btn btn-danger btn-block d-flex align-items-center justify-content-center shadow-lg p-3 rounded">
                <img src="{{ asset('assets/img/aldhmani.jpeg') }}"
                     class="mr-3 rounded-circle border border-light"
                     style="width: 40px; height: 40px;">
                <span class="font-weight-bold" style="font-size: 1.2rem;">عيادات مجمع زاوية الدهماني</span>
            </a>
        </div>
    </div>
</div>



<div class="page-section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <h1 class="text-right" style="font-family: 'Tajawal', sans-serif; font-weight: 600; color: #2C3E50;">مرحبا بكم في عياداتكم</h1>
                <p class="text-grey mb-4" style="text-align: right; line-height: 1.8; font-size: 20px; color: #333; font-family: 'Tajawal', sans-serif; font-weight: 400;">
                    يعتبر الاطمئنان النفسي من أهم العوامل التي تساعد المريض في عملية الشفاء. فعندما يثق المريض في خطة العلاج وفي الفريق الطبي المعالج، يشعر براحة نفسية تسهم في تحسين استجابته للعلاج
                    <br><br>
                    الدعم النفسي والمعنوي من الأهل والأصدقاء يلعب دورًا كبيرًا في تعزيز هذه الثقة، مما يساعد المريض على التفاعل بإيجابية مع الأدوية والإجراءات الطبية
                    <br><br>
                    كما أن الإيمان بأن العلاج جزء من قدر الله، وأن الشفاء ممكن بفضل الله، يزيد من الإصرار والتفاؤل، مما يجعل المريض أكثر قدرة على تحمل الصعوبات
                    <br><br>
                    وفي ظل التقدم الطبي والعلمي، أصبحت العديد من الأمراض قابلة للعلاج، مما يمنح المرضى الأمل في استعادة صحتهم واستئناف حياتهم الطبيعية.
                    <br><br>
                    لذا، على المريض أن يلتزم بتوجيهات الأطباء ويتقبل العلاج بصدر رحب، مستعينًا بالصبر والإيمان، فالأمل والتفاؤل هما جزء من رحلة الشفاء
                </p>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                <div class="img-place custom-img-1">
                    <img src="../assets/img/doctor-2.jpg" alt="صورة الطبيب" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </div>
</div>


@include('user.doctor')
@include('user.Latest')

<footer class="page-footer bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center px-md-3">
            <!-- Social Media Section -->
            <div class="col-sm-4 col-md-3 py-3 text-center">
                <h5 class="text-dark mb-2">Social Media</h5>
                <div class="footer-sosmed">
                    <a href="https://www.facebook.com/profile.php?id=100007988738077" target="_blank" class="mx-2">
                        <span class="mai-logo-facebook-f" style="font-size: 22px;"></span>
                    </a>
                    <a href="https://www.instagram.com/almaldin_mastara/profilecard/?igsh=MWd0amtxcDczOXMwMQ==" target="_blank" class="mx-2">
                        <span class="mai-logo-instagram" style="font-size: 22px;"></span>
                    </a>
                </div>
            </div>

            <!-- Contact Us Section -->
            <div class="col-sm-4 col-md-3 py-3 text-center">
                <h5 class="text-dark mb-2">Contact Us</h5>
                <div class="footer-contact">
                    <a href="mailto:almaldin999@gmail.com" class="text-dark">
                        <span class="mai-mail" style="font-size: 22px;"></span>
                        almaldin999@gmail.com
                    </a>
                </div>
            </div>
        </div>

        <!-- Horizontal line separator -->
        <hr class="my-3">

        <!-- Footer Copyright Section -->
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






