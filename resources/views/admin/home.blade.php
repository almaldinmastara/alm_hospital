
<!DOCTYPE html>

  <head>
    <link rel="icon" href="{{ asset('assets/img/matega.jpeg') }}" type="image/x-icon">
   @include('admin.css')

  </head>
  <body>
@include('admin.style')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')

      <!-- partial -->
    <!-- @include('admin.body') -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
