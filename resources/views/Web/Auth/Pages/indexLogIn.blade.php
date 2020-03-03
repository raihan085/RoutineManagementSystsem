<!DOCTYPE html>
<html lang="en">

<head>
  @include('Web.Auth.Partials.CSS')
</head>

<body>

@include('Web.Auth.Layouts.LogInNav')

@if(Request::is('user/index'))
  @include('Web.Auth.includes.LogInSection')
@elseif(Request::is('user/index/request'))
  @include('Web.Auth.includes.LogIntext')
@endif

@include('Web.Auth.Partials.footer')

@include('Web.Auth.Partials.JS')
</body>

</html>
