@extends('Web.Auth.Pages.indexLogIn')

@section('body')
<ul class="nav navbar-nav ml-auto">
  <li class="nav-item">
    <a href="{{ route('user.request.contact')}}" class="nav-link">Contact</a>
  </li>
  <li class="nav-item">
    <a href="{{route('user.logout') }}" class="nav-link">Logout</a>
  </li>
</ul>
@endsection
