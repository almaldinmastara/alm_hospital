
<!DOCTYPE html>
<html lang="en">
  <head>

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

        <table style="border-collapse: collapse; width: 100%; border: 2px solid black;"> <!-- إطار للجدول بأكمله -->
            <tr style="background-color: #548ada; border: 1px solid black;" align="center">
                <th style="padding: 10px; border: 1px solid black;">Doctor Name</th>
                <th style="padding: 10px; border: 1px solid black;">Phone</th>
                <th style="padding: 10px; border: 1px solid black;">Specialty</th>
                <th style="padding: 10px; border: 1px solid black;">Hire Days</th>
                <th style="padding: 10px; border: 1px solid black;">Clinic Name</th>
                <th style="padding: 10px; border: 1px solid black;">Image</th>
                <th style="padding: 10px; border: 1px solid black;">Delete</th>
                <th style="padding: 10px; border: 1px solid black;">Update</th>
            </tr>

            @foreach ($data as $doctor)
            <tr style="border-collapse: collapse; background-color: rgb(85, 111, 124); border: 1px solid black;" align="center">
                <td style="border: 1px solid black;">{{ $doctor->name }}</td>
                <td style="border: 1px solid black;">{{ $doctor->phone }}</td>
                <td style="border: 1px solid black;">{{ $doctor->specialty }}</td>
                <td style="border: 1px solid black;">{{ $doctor->hire_date }}</td>
                <td style="border: 1px solid black;">{{ $doctor->clinic_name }}</td>
                <td style="border: 1px solid black;"><img height="100" width="100" src="doctorimage/{{ $doctor->image }}"></td>
                <td style="border: 1px solid black;"><a onclick="return confirm('هل انت متاكد من حذف ؟')" class="btn btn-danger" href="{{ url('deletedoctor', $doctor->id) }}">Delete</a></td>
                <td style="border: 1px solid black;"><a class="btn btn-primary"  href="{{ url('updatedoctor',$doctor->id) }}">Update</a></td>
            </tr>
            @endforeach
        </table>
    </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
