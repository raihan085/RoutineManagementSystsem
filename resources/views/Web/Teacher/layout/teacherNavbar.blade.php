  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <a class="navbar-brand" href="{{ URL::to('author/teacher') }}">
      <img src="{{ asset('Web\logo\SUST.png') }}" alt="LOGO" width="50">
      <span class="bg-light">Shahjala University of Science & Technology</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('author/teacher') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('author/teacher/name') }}">Self Routine</a>
          <!-- {{ route('url','passing value ei jaygay teacher er shortname hobe ') }}  -->
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('author/teacher/day')}}">Daily Routine</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('author/teacher/requestclass')}}">Request Class</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto m-3">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <a href="{{ URL::to('user/index/logout') }}" class="dropdown-item"></a>Log Out

            <a class="dropdown-item" href="#">Change Password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Contact</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
