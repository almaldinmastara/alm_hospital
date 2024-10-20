
<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">

  <style type="text/css">
    label
    {
        display: inline-block;
        width: 200px;
    }
  </style>


   @include('admin.css')

  </head>
  <body>
@include('admin.style')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">

       <div class="container" align="center"  style="padding: 100">


        @if (session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
             x
            </button>
            {{ session()->get('message') }}

        </div>

        @endif

        <form action="{{ url('editdoctor',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px">
            <label>Doctor Name</label>
            <input style="color: black"; type="text" name="name" value=" {{ $data->name }}">
            </div>

            <div style="padding:15px">
                <label>Doctor Phone</label>
                <input style="color: black"; type="text" name="phone" value=" {{ $data->phone }}">
                </div>

  <div style="padding:15px">
  <label>Clinic Name</label>
 <select name="clinic" style="color: black" value="{{ $data->clinic_name }}">
  <option>--select--</option>
 <option value="عيادات الطب الوقائي">عيادات الطب الوقائي</option>
 <option value="عيادات معيتيقة العسكري">عيادات معيتيقة العسكري</option>
 <option value="عيادات زاوية الدهماني">عيادات زاوية الدهماني</option>
 </select>
 </div>

            <div style="padding:15px">
                <label>Doctor Specialty</label>
                   <select name="specialty" style="color: black" value="{{ $data->specialty }}">
                    <option>--select--</option>
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

       <div style="padding:15px">
        <label>Doctor Days</label>
        <input style="color: black"; type="text" name="data" value=" {{ $data->hire_date }}">
        </div>

      <div style="padding:15px">
         <label>Old Doctor Image</label>
         <img height="150px" width="150" src="doctorimage/{{ $data->image }}">
                </div>
                <div style="padding: 15px">
                    <label>Change Image </label>
                    <input type="file" name="file" >
                </div>
                <div style="padding: 15px">
                    <input type="submit" class="btn btn-primary">
                </div>


        </form>

       </div>

      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
