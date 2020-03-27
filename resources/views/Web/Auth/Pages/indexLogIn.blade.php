<!DOCTYPE html>
<html lang="en">

<head>
  @include('Web.Auth.Partials.CSS')
</head>

<body>

@include('Web.Auth.Layouts.LogInNav')

@if(Request::is('/'))
  @include('Web.Auth.includes.LogInSection')
@elseif(Request::is('request'))
  @include('Web.Auth.includes.LogIntext')
@endif

@if(Request::is('contact')||Request::is('contact'))
  @yield('contact')
@endif

<br><br>
@include('Web.Auth.Partials.ExtraFooter')

@include('Web.Auth.Partials.JS')
</body>

</html>
