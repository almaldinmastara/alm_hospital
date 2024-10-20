
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

        <div align="center" style="padding-top: 10px;">
            <table style="border-collapse: collapse; width: auto; margin: 0 auto;" align="center">
                <tr style="background-color: #778899; border: 1px solid black;">
                    <th style="padding: 10px; border: 1px solid black;">Customer name</th>
                    <th style="padding: 10px; border: 1px solid black;">Phone</th>
                    <th style="padding: 10px; border: 1px solid black;">Email</th> <!-- تأكد من وجود حقل البريد الإلكتروني -->
                    <th style="padding: 10px; border: 1px solid black;">Doctor Name</th>
                    <th style="padding: 10px; border: 1px solid black;">Date</th>
                    <th style="padding: 10px; border: 1px solid black;">Message</th>
                    <th style="padding: 10px; border: 1px solid black;">Status</th>
                    <th style="padding: 10px; border: 1px solid black;">Approved</th>
                    <th style="padding: 10px; border: 1px solid black;">Canceled</th>
                </tr>
                @foreach ($data as $appiont)
                <tr style="border-collapse: collapse; table-layout: auto; width: auto;" align="center">
                    <td style="border: 1px solid white;">{{ $appiont->name }}</td>
                    <td style="border: 1px solid white;">{{ $appiont->phone }}</td>
                    <td style="border: 1px solid white;">{{ $appiont->email }}</td> <!-- تأكد من وجود حقل البريد الإلكتروني -->
                    <td style="border: 1px solid white;">{{ $appiont->doctor }}</td>
                    <td style="border: 1px solid white;">{{ $appiont->date }}</td>
                    <td style="border: 1px solid white;">{{ $appiont->message }}</td>
                    <td style="border: 1px solid white;">{{ $appiont->status }}</td>

                    <td>
                        <a class="btn btn-success" style="padding: 10px 20px; text-decoration: none; border-radius: 5px; color: white; background-color: green; border: 1px solid white;" href="{{ url('approved', $appiont->id) }}">Approved</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" style="padding: 10px 20px; text-decoration: none; border-radius: 5px; color: white; background-color: red; border: 1px solid white;" href="{{ url('Cancled', $appiont->id) }}">Canceled</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>


       </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
