<div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark mb-5">
  <div class="container">
    <a href="{{ URL::to('user/index') }}" class="navbar-brand">
      <img src="{{ asset('Web/Logo/SUST.png') }}" alt="LOGO" width="50">
      <span class="text">Shahjalal University of Science & Technology</span>
    </a>
    <button type="button" name="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#LogInnavbarNav" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="LogInnavbarNav">

  @if (Request::is('user/index') || Request::is('user/joinus'))
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
            <a href="{{ URL::to('user/index') }}" class="nav-link">Log In</a>
          </li>
          <li class="nav-item">
            <a href="{{ URL::to('user/joinus') }}" class="nav-link">Join Us!</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
     @else
        @yield('body')
    @endif
    </div>
  </div>
</nav>
</div>
