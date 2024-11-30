<!DOCTYPE html>
<html lang="ar">
<head>
  <base href="/public">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تعديل بيانات الطبيب</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  @include('admin.css')
  <link rel="icon" href="{{ asset('assets/img/matega.jpeg') }}" type="image/x-icon">
  <style>
    /* تعديل خلفية النص في عناصر input و select */
    input.form-control, select.form-select {
      background-color: white;
      color: black;
    }

    /* تغيير لون النص في العناوين */
    .form-label {
      color: white; /* تغيير لون النص إلى الأبيض */
    }

    /* تعديل لون خلفية الأزرار في حالة النجاح */
    .alert-success {
      background-color: #28a745;
      color: white;
    }

    /* تغيير لون النص في العناوين داخل المربعات */
    .card-header {
      background-color: #007bff; /* لون خلفية العنوان */
    }
  </style>
</head>
<body>

  @include('admin.style')
  @include('admin.sidebar')
  @include('admin.navbar')

  <div class="container-fluid page-body-wrapper">
    <div class="container py-5">

      <!-- Display success message -->
      @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session()->get('message') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <!-- Form to edit a doctor -->
      <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
          <h3>تعديل بيانات الطبيب</h3>
        </div>
        <div class="card-body">
          <form action="{{ url('editdoctor', $doctor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Doctor Name -->
            <div class="mb-3">
              <label for="name" class="form-label">اسم الطبيب</label>
              <input type="text" id="name" name="name" value="{{ $doctor->name }}" class="form-control" placeholder="Enter Doctor Name" required>
            </div>

            <!-- Doctor Phone -->
            <div class="mb-3">
              <label for="phone" class="form-label">رقم هاتف الطبيب</label>
              <input type="text" id="phone" name="phone" value="{{ $doctor->phone }}" class="form-control" placeholder="Enter Phone Number" required>
            </div>

            <!-- Clinic Name -->
            <div class="mb-3">
              <label for="clinic" class="form-label">اسم العيادة</label>
              <select id="clinic" name="clinic" class="form-select" required>
                <option value="">-- اختر العيادة --</option>
                <option value="عيادات الطب الوقائي" {{ $doctor->clinic_name == 'عيادات الطب الوقائي' ? 'selected' : '' }}>عيادات الطب الوقائي</option>
                <option value="عيادات معيتيقة العسكري" {{ $doctor->clinic_name == 'عيادات معيتيقة العسكري' ? 'selected' : '' }}>عيادات معيتيقة العسكري</option>
                <option value="عيادات زاوية الدهماني" {{ $doctor->clinic_name == 'عيادات زاوية الدهماني' ? 'selected' : '' }}>عيادات زاوية الدهماني</option>
              </select>
            </div>

            <!-- Doctor Days -->
            <div class="mb-3">
              <label for="data" class="form-label">أيام عمل الطبيب</label>
              <input type="text" id="data" name="data" value="{{ $doctor->hire_date }}" class="form-control" placeholder="Enter Working Days" required>
            </div>

            <!-- Specialty -->
            <div class="mb-3">
              <label for="specialty" class="form-label">تخصص الطبيب</label>
              <select id="specialty" name="specialty" class="form-select" required>
                <option value="">-- اختر تخصص الطبيب --</option>
                <option value="عيادة القلب">عيادة القلب</option>
                <option value="الجراحة العامة">الجراحة العامة</option>
                <option value="جراحة المسالك">جراحة المسالك</option>
                <option value=" المسالك"> المسالك</option>
                <option value="عيادة الصدرية">عيادة الصدرية</option>
                <option value="اوعية دموية">اوعية دموية</option>
                <option value="عيادة الاطفال">عيادة الاطفال</option>
                <option value="الجهاز الهضمي">الجهاز الهضمي</option>
                <option value="جراحة الاطفال">جراحة الاطفال</option>
                <option value="حديثي الولادة">حديثي الولادة</option>
                <option value=" جراحة السمنة">جراحة السمنة</option>
                <option value="مناظير اطفال">مناظير اطفال</option>
                <option value="المناظير">المناظير</option>
                <option value="اخصائي اطفال">اخصائي اطفال</option>
                <option value="الانف و الاذن و الحنجرة">الانف و الاذن و الحنجرة</option>
                <option value="عيادة العيون">عيادة العيون</option>
                <option value="عيادة العظام">عيادة العظام</option>
                <option value="نساء و ولادة">نساء و ولادة</option>
                <option value="ECG">ECG</option>
                <option value="BP holder">BP holder</option>
                <option value="صحة عامة">صحة عامة</option>
                <option value="سكر و غدد صماء">سكر و غدد صماء</option>
                <option value="تغزية علاجية">تغذية علاجية</option>
                <option value="الجلدية">الجلدية</option>
                <option value="اشعة تشخيصية">اشعة تشخيصية</option>
                <option value="باطنية">باطنية</option>
                <option value="القلب و الايكو">القلب و الايكو</option>
                <option value="عيادة السكر">عيادة السكر</option>
                <option value="القسطرة">القسطرة </option>
                <option value="الجراحة">الجراحة </option>
                <option value="عيادة الاعصاب">عيادة الاعصاب </option>
                <option value="عيادة المجهود">عيادة المجهود </option>
            </select>

            </div>

            <!-- Doctor Image -->
            <div class="mb-3">
              <label class="form-label">الصورة القديمة للطبيب</label><br>
              <img height="150px" width="150px" src="doctorimage/{{ $doctor->image }}" class="img-thumbnail">
            </div>

            <div class="mb-3">
              <label for="file" class="form-label">تغيير الصورة</label>
              <input type="file" id="file" name="file" class="form-control" >
            </div>

            <!-- Doctor CV -->
            <div class="mb-3">
              <label class="form-label">السيرة الذاتية القديمة للطبيب</label>
              @if ($doctor->cv)
                <a href="doctorcv/{{ $doctor->cv }}" target="_blank" class="btn btn-success">عرض السيرة الذاتية</a>
              @else
                <span class="text-danger">لا يوجد سيرة ذاتية</span>
              @endif
            </div>

            <div class="mb-3">
              <label for="cv" class="form-label">تغيير السيرة الذاتية</label>
              <input type="file" id="cv" name="cv" class="form-control" accept=".pdf,.doc,.docx">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
              <button class="btn btn-primary" type="submit">تحديث</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

  @include('admin.script')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
