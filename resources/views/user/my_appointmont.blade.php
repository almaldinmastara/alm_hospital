<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>Maitika Military Clinics</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  @include('user.my_app')
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
              <a href="#"><span class="mai-call text-primary"></span> +249921227016</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> almaldin999@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">اختار طبيبك</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            @if(Route::has('login'))
            @auth
            <x-app-layout></x-app-layout>
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ ('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ ('register') }}">Register</a>
            </li>
            @endauth
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-5">
    <h2 class="text-center">مواعيد الأطباء</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>اسم الطبيب</th>
            <th>التاريخ</th>
            <th>الوصف</th>
            <th>حالة الاستجابة</th>
            <th>الغاء</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($appoint as $appoints)
          <tr>
            <td>{{ $appoints->doctor }}</td>
            <td>{{ $appoints->date }}</td>
            <td>{{ $appoints->message }}</td>
            <td>{{ $appoints->status }}</td>
            <td>
              <a class="btn btn-danger btn-sm" onclick="return confirm('هل انت متاكد بامر الحذف')" href="{{ url('cancel_appoint',$appoints->id) }}">Cancel</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>

</body>
</html>
