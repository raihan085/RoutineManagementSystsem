<!-- topnav -->
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top mt-5">
    <a class="navbar-brand" href="{{ route('admin') }}">
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
          <a class="nav-link" href="#">Home</a>
        </li>
      </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{ asset('Web\Pic\Admin\SaifSir.jpg')}}" alt="Photo" class="rounded-circle m-3" width="50">
              <span>Saiful Islam</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Log Out</a>
              <a class="dropdown-item" href="#">Password Change</a>
            </div>
          </li>
        </ul>

    </div>
  </nav>
