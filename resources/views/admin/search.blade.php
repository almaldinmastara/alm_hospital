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
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="icon" href="{{ asset('assets/img/matega.jpeg') }}" type="image/x-icon">
</head>
<body>

    <div class="container-fluid page-body-wrapper" style="padding: 30px;">
        <div class="d-flex justify-content-between align-items-center mb-4">

          <a href="{{ url('/') }}" class="btn btn-primary">الرجوع إلى الصفحة الرئيسية</a>
        </div>

  <!-- Search Section -->
  <center>
    <form action="{{ route('search.route') }}" method="GET" class="mb-4">
      <input
        type="text"
        name="search"
        placeholder="البحث عن الطبيب"
        class="form-control d-inline-block w-50"
        style="display: inline-block; max-width: 300px;"
      >
      <button
        type="submit"
        class="btn btn-primary ms-2"
      >
        البحـث
      </button>
    </form>
  </center>

  <!-- Doctors Table -->
  <div class="container-fluid page-body-wrapper">
    @if($doctors->isEmpty())
      <div class="text-center" style="height: 100vh;">
        <p class="fs-4 text-danger">لا يوجد بيانات لما تبحث عنه!!!</p>
      </div>
    @else
      <table class="table table-striped table-bordered">
        <thead class="table-light text-center">
          <tr>
            <th>اسم الطبيب</th>
            <th>التخصص</th>
            <th>الايام</th>
            <th>العيادة</th>
            <th>الجوال</th>
            <th>صورة الطبيب</th>
            <th>السيرة الذاتية</th>
            <th>تعديل</th>
            <th>حذف</th>
          </tr>
        </thead>
        <tbody class="text-center">
          @foreach($doctors as $doctor)
            <tr>
              <td>{{ $doctor->name }}</td>
              <td>{{ $doctor->specialty }}</td>
              <td>{{ $doctor->hire_date }}</td>
              <td>{{ $doctor->clinic_name }}</td>
              <td>{{ $doctor->phone }}</td>
              <td><img height="100" width="100" src="doctorimage/{{ $doctor->image }}"></td>
              <td>
                @if ($doctor->cv)
                  <a href="doctorcv/{{ $doctor->cv }}" class="btn btn-success" target="_blank">السيرة الذاتية</a>
                @else
                  <span class="text-danger">غير متوفرة</span>
                @endif
              </td>
              <td>
                <a href="{{ url('editdoctor', $doctor->id) }}" class="btn btn-primary">تعديل</a>
              </td>
              <td>
                <a onclick="return confirm('هل أنت متأكد من الحذف؟')" href="{{ url('deletedoctor', $doctor->id) }}" class="btn btn-danger">حذف</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>

</body>
</html>
