<!DOCTYPE html>
<html lang="en">
<head>
  @include('Web.Teacher.Partials.CSS')
</head>
<body>

@include('Web.Teacher.layout.teacherNavbar')

  @yield('body')

  @include('Web.Teacher.Partials.footer')

  @include('Web.Teacher.Partials.JS')

</body>
</html>
