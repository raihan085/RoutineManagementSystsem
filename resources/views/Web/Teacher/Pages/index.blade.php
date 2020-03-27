<!DOCTYPE html>
<html lang="en">
<head>
  @include('Web.Teacher.Partials.CSS')
</head>
<body>

  @include('Web.Teacher.layout.extrateacherNavbar')

  @yield('body')

  <br><br><br>
  @include('Web.Teacher.Partials.ExtraFooter')

  @include('Web.Teacher.Partials.JS')

</body>
</html>
