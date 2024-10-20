<!DOCTYPE html>
<html lang="en">
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
              <a href="#"><span class="mai-call text-primary"></span> +249921227016</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> almaldin999@gmail.com</a>
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


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">


            @if(Route::has('login'))
            @auth



            <x-app-layout>

            </x-app-layout>

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
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div>

  </div>

  <div align="center" style="padding: 60px">
    <table style="border-collapse: collapse;  table-layout: auto; width: 100%;">
        <tr style="background-color: #778899; border: 1px solid black;">
            <th style="padding: 20px; font-size: 20px; color: black; border: 1px solid black;">اسم الطبيب</th>
            <th style="padding: 20px; font-size: 20px; color: black; border: 1px solid black;">التاريخ</th>
            <th style="padding: 20px; font-size: 20px; color: black; border: 1px solid black;" align="center">الوصف</th>
            <th style="padding: 20px; font-size: 20px; color: black; border: 1px solid black;">حالة الاستجابة</th>
            <th style="padding: 20px; font-size: 20px; color: black; border: 1px solid black;">الغاء</th>
        </tr>

        @foreach ($appoint as $appoints)

        <tr >
            <th style="padding: 20px; font-size: 20px; color: black; border: 1px solid black;" >{{ $appoints->doctor }}</th>
            <th style="padding: 20px; font-size: 20px; color: black; border: 1px solid black;">{{ $appoints->date }}</th>
            <th style="padding: 20px; font-size: 20px; color: black; border: 1px solid black;">{{ $appoints->message }}</th>
            <td style="padding: 20px; font-size: 20px; color: black; border: 1px solid black;">{{ $appoints->status }}</td>
            <td style="padding: 20px; font-size: 20px; color: black; border: 1px solid black;">
            <a class="btn btn-danger" onclick="return confirm('هل انت متاكد بامر الحذف')" href="{{ url('cancel_appoint',$appoints->id) }}">Cancel</a></td>
        </tr>
        @endforeach

    </table>
  </div>




<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
