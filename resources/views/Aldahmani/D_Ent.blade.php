<!DOCTYPE html>
<html lang="ar">
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
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@include('Aldahmani.cssforclin')
</head>
<body>
  <div class="container-fluid page-body-wrapper" style="padding-top: 70px">
    <!-- الديف الأول مع النص في المنتصف -->
    <div class="content d-flex justify-content-center align-items-center" style="height: 90vh;">
      <div class="container-fluid mt--5">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8"> <!-- جعل العمود يتناسب مع الشاشات الأصغر -->
            <div class="card shadow">
              <div class="card-header text-center">
                <div class="back-button-container">
                    <a href="{{ url()->previous() }}" class="btn btn-primary back-button">الرجوع</a>
                  </div>
              </div>
            </div>

            <!-- المحتوى هنا -->
            @include('Aldahmani.D_doctor')

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/js/theme.js"></script>
</body>
</html>
