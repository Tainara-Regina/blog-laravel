 <html lang="en">
  <!-- Header -->
@include('pages.partials.header')
  <body>
    <!-- Default Bootstrap Navbar -->
    @include('pages.partials.nav')

     <div class="container">
        @yield('content')
     </div>

    <!-- footer -->
   @include('pages.partials.footer')
  </body>
</html>