<!DOCTYPE html>
<html lang="en">
<head>
  @include('Web.Student.Partials.CSS')
</head>
<body>
  @include('Web.Student.layout.studentNavbar')

  @yield('body')

  <br><br><br>
  @include('Web.Student.Partials.ExtraFooter')

  @include('Web.Student.Partials.JS')

</body>
</html>
