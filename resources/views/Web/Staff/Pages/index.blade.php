<!DOCTYPE html>
<html lang="en">
<head>
  @include('Web.Staff.Partials.CSS')
</head>
<body>
  @include('Web.Staff.layout.staffNavbar')

  @yield('body')

  @include('Web.Staff.Partials.footer')

  @include('Web.Staff.Partials.JS')

</body>
</html>
