<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('Staff') }}">
      <img src="{{ asset('Web\Logo\SUST.png') }}" alt="LOGO" width="50">
      <span class="bg-light">Shahjala University of Science & Technology</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!--
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::to('author/staff') }}">Home <span class="sr-only">(current)</span></a>
        </li>
      -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('Staff') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('staff.room.number.routine',['roomNumber'=>'304']) }}">Self Routine</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('staff.day.routine') }}">Daily Routine</a>
        </li>
      </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::guard('profile')->user()->FullName }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">My Profile</a>
              <a href="{{ route('user.logout')}}" class="dropdown-item">Log Out</a>

              <a class="dropdown-item" href="#">Password Change</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ URL::to('contact/admin') }}">Contact</a>
            </div>
          </li>
        </ul>

    </div>
  </nav>
