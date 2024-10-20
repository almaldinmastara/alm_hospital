
<!DOCTYPE html>
<html lang="en">
  <head>

<style type="text/css">
label
{
    display: inline-block;
    width: 200px
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
      <!-- partial -->

                   <div class="container-fluid page-body-wrapper">

                   <div class="container" alig="center" style="padding-top: 50px";>

                    @if (session()->has('message'))

                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                         x
                        </button>
                        {{ session()->get('message') }}

                    </div>

                    @endif

                    <form action="{{ url('/upload_doctor') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="padding-top: 15px">
                            <label> Doctor name</label>
                        <input type="text" name="name" placeholder="Doctor Name" style="color: black" required="">
                        </div>
                        <div style="padding-top: 15px">
                        <label>Doctor Phone</label>
                        <input type="text" name="number" placeholder="Phone Number" style="color: black" required="">
                        </div>

                        <div style="padding-top: 15px">
                            <label>Clinic Name</label>
                            <select name="clinic" style="color: black" required="">
                                <option>--select--</option>
                                <option value="عيادات الطب الوقائي">عيادات الطب الوقائي</option>
                                <option value="عيادات معيتيقة العسكري">عيادات معيتيقة العسكري</option>
                                <option value="عيادات زاوية الدهماني">عيادات زاوية الدهماني</option>
                            </select>
                            </div>

                        <div style="padding-top: 15px">
                            <label>Doctor Days</label>
                            <input type="text" name="data" placeholder="days" style="color: black" required="">
                            </div>

                        <div style="padding-top: 15px">
                        <label>Specialty</label>
                        <select name="specialty" style="color: black" required="">
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

                        <div style="padding-top: 15px">
                        <label>Doctor Image</label>
                        <input type="file" name="file" style="color: black" required="">
                        </div>
                        <div style="padding-top: 15px">
                        <button style="color: #008000" type="submit">Upload</button>
                        </div>

                    </form>
            </div>
            </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
