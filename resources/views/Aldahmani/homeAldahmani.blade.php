
<!DOCTYPE html>
  <head>

   @include('admin.css')
   <link rel="icon" href="{{ asset('assets/img/matega.jpeg') }}" type="image/x-icon">
  </head>
  <body>
@include('admin.style')
      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->

      @include('admin.navbar')

      <!-- partial -->


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
