<!DOCTYPE html>
<html lang="en">
<head>
  @include('Web.Student.Partials.CSS')
</head>
<body>
  @include('Web.Student.layout.studentNavbar')

  @yield('body')

  @include('Web.Student.Partials.footer')

  @include('Web.Student.Partials.JS')

</body>
</html>
