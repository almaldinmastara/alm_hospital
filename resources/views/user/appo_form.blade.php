<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>Maitika Military Clinics Preventive Medicine and Dahmani</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="page-section d-flex justify-content-center align-items-center" style="min-height: 100vh;">
      <div class="container">
        
        <button onclick="history.back()" class="btn btn-secondary mb-3">رجوع للصفحة السابقة</button>
        <div class="text-center mb-4">
          <h1 class="wow fadeInUp display-6">إنشاء موعد مع طبيب</h1>
        </div>
        <form class="main-form" action="{{ url('appoint') }}" method="POST">
          @csrf

          @if(session('message'))
            <div class="alert alert-success">
              {{ session('message') }}
            </div>
          @endif

          <div class="row mt-5">
            <!-- حقل الاسم -->
            <div class="col-md-6 col-12 py-2 wow fadeInLeft">
              <input type="text" name="name" class="form-control" placeholder="اسمك رباعي">
            </div>

            <!-- حقل العمر -->
            <div class="col-md-6 col-12 py-2 wow fadeInRight">
              <select name="phone" class="custom-select" required>
                <option value="" selected>اختار عمرك حسب الفئة</option>
                @for ($i = 1; $i <= 100; $i += 5)
                  <option value="{{ $i }}-{{ $i+4 }}">{{ $i }}-{{ $i+4 }} years</option>
                @endfor
              </select>
            </div>

            <!-- حقل التاريخ -->
            <div class="col-md-6 col-12 py-2 wow fadeInLeft" data-wow-delay="300ms">
              <input type="date" name="date" class="form-control">
            </div>

            <!-- حقل اختيار الطبيب -->
            <div class="col-md-6 col-12 py-2 wow fadeInRight" data-wow-delay="300ms">
              <select name="doctor" id="departement" class="custom-select">
                <option>اختار طبيبك</option>
                @foreach ($doc as $doc)
                  <option value="{{ $doc->name }}">{{ $doc->name }} _يتخصص في_ {{ $doc->specialty }}</option>
                @endforeach
              </select>
            </div>

            <!-- حقل الجوال -->
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
              <input type="text" name="email" class="form-control" placeholder="الجوال..">
            </div>

            <!-- حقل الرسالة -->
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
              <textarea name="message" id="message" class="form-control" rows="6" placeholder="بماذا تشعر.."></textarea>
            </div>
          </div>

          <!-- زر الإرسال -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">إرسال</button>
          </div>
        </form>
      </div>
    </div>
  </header>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>

</body>
</html>
