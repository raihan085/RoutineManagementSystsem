  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('Teacher') }}">
      <img src="{{ asset('Web\Logo\SUST.png') }}" alt="LOGO" width="50">
      <span class="bg-dark">Shahjala University of Science & Technology</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!--
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::to('author/student') }}">Home <span class="sr-only">(current)</span></a>
        </li>
      -->
        <li class="nav-item btn">
          <a class="nav-link" href="{{ route('Teacher') }}">Home</a>
        </li>
        <li class="nav-item btn">
          <a class="nav-link" href="{{ route('teacher.name.routine') }}">Self Routine</a>
        </li>

        <li class="nav-item btn">
          <a class="nav-link" href="{{ route('teacher.day.routine') }}">Daily Routine</a>
        </li>
        <li class="nav-item btn">
          <a class="nav-link" href="{{ route('request.class') }}">Request Class</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto m-3">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('Web/Pic/Auth/defaultProfilePicture.png') }}" alt="Photo" width="30" class="rounded-circle mr-3">{{ Auth::guard('profile')->user()->FullName }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profile</a>

            <a href="{{ route('user.logout') }}" class="dropdown-item">Log Out</a>

            <a class="dropdown-item" href="#">Change Password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('teacher.contact') }}">Contact</a>
          </div>
        </li>
      </ul>
      <!--
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    -->
    </div>
  </nav>
