<!-- topnav -->
<div class=" bg-white py-2">
  <div class="row bg-dark fixed-top col-lg-9 ml-auto mb-3">
    <div class="col-md-4">
      <h4 class="text-light text-uppercase mb-0">Dashborad</h4>
    </div>
    <!-- add search button -->
    <div class="col-md-5">
      <form action="#" method="post">
        <div class="input-group">
          <input type="text" name="" class="form-control" placeholder="Search">
          <button type="button" class="btn btn-white">
            <i class="fas fa-search text-danger"></i>
          </button>
        </div>
      </form>
    </div>
    <!-- end of search button -->
    <!-- add icon -->
    <div class="col-md-3">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#" class="nav-link icon-parent">
            <i class="fas fa-comments text-muted fa-lg"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link icon-parent">
            <i class="fas fa-bell text-muted fa-lg">
            </i>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-sign-out-alt text-danger fa-lg"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- end of icon -->
  </div>

  <div class="col-2">

  </div>

  <div class="container text-center my-5 col-10">
    @yield('body')
  </div>

</div>
<!-- end of topnav -->
