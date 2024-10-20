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
</head>
<body>

    <div class="container-fluid page-body-wrapper" style="padding-top: 70px">
        <a href="{{ url('/') }}" class="btn btn-primary" style="padding: 10px 20px; background-color: #007bff; color: white; border-radius: 5px; text-decoration: none; margin-top: 20px; float: right;">
            الرجوع إلى الصفحة الرئيسية
        </a>
        <center>
            <form action="{{ route('search.route') }}" method="GET" style="margin: 20px;">
                <input
                    type="text"
                    name="search"
                    placeholder="البحث عن الطبيب"
                    style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;"
                >
                <button
                    type="submit"
                    style="padding: 10px 15px; background-color: #007bff; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin-left: 5px;"
                >
                    البـحـث
                </button>
            </form>
        </center>


        <div class="container-fluid page-body-wrapper" style="display: flex ;align-items: center">
            @if($doctors->isEmpty())
            <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                <p style="font-size: 20px; color: #333; ">لا يوجد بيانات لما تبحث عنه!!!</p>
            </div>

            @else
                <table class="table table-striped" style="width: 70%; margin: 0 auto;">
                    <thead style=" border: 2px ">
                        <tr style="border-collapse: collapse; background-color: skyblue; border: 1px solid black;" align="center">
                            <th style="width: 30%;">اسم الطبيب</th>
                            <th style="width: 20%;">التخصص</th>
                            <th style="width: 30%;">الايام</th>
                            <th style="width: 30%;">العيادة</th>
                            <th style="width: 20%;">الجوال</th>
                            <th style="width: 20%;">صورة الطبيب</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->specialty }}</td>
                                <td>{{ $doctor->hire_date }}</td>
                                <td>{{ $doctor->clinic_name }}</td>
                                <td>{{ $doctor->phone }}</td>
                                <td><img height="100" width="100" src="doctorimage/{{ $doctor->image }}"></td>

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

    </div>
</body>
</html>



