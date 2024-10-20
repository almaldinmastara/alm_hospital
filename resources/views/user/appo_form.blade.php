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



    <div class="page-section d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">
          <h1 class="text-center wow fadeInUp">إنشاء موعد مع طبيب</h1>
          <button onclick="history.back()" class="btn btn-secondary mb-3">رجوع للصفحة السابقة</button>
          <form class="main-form" action="{{ url('appoint') }}" method="POST">
            @csrf


            @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

            <div class="row mt-5">
              <!-- حقل الاسم -->
              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                <input type="text" name="name" class="form-control" placeholder="اسمك رباعي">
              </div>

              <!-- حقل العمر -->
              <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                <select name="phone" class="custom-select">
                  <option value="">اختار عمرك حسب الفئة</option>
                  <option value="1-5">1-5 سنوات</option>
                  <option value="6-10">6-10 سنوات</option>
                  <option value="11-15">11-15 سنوات</option>
                  <option value="16-20">16-20 سنوات</option>
                  <option value="21-25">21-25 سنوات</option>
                  <option value="26-30">26-30 سنوات</option>
                  <option value="31-35">31-35 سنوات</option>
                  <option value="36-40">36-40 سنوات</option>
                  <option value="41-45">41-45 سنوات</option>
                  <option value="46-50">46-50 سنوات</option>
                  <option value="51-55">51-55 سنوات</option>
                  <option value="56-60">56-60 سنوات</option>
                  <option value="61-65">61-65 سنوات</option>
                  <option value="66-70">66-70 سنوات</option>
                  <option value="71-75">71-75 سنوات</option>
                  <option value="76-80">76-80 سنوات</option>
                  <option value="81-85">81-85 سنوات</option>
                  <option value="86-90">86-90 سنوات</option>
                  <option value="91-95">91-95 سنوات</option>
                  <option value="96-100">96-100 سنوات</option>
                </select>
              </div>

              <!-- حقل التاريخ -->
              <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                <input type="date" name="date" class="form-control">
              </div>

              <!-- حقل اختيار الطبيب -->
              <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
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
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">إرسال</button>
          </form>
        </div>
      </div>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
