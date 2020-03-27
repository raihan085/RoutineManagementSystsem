<!DOCTYPE html>
<html lang="en">
<head>
  @include('Web.Staff.Partials.CSS')
</head>
<body>
  @include('Web.Staff.layout.staffNavbar')

  @yield('body')

  <br><br><br>
  @include('Web.Staff.Partials.ExtraFooter')

  @include('Web.Staff.Partials.JS')

</body>
</html>
