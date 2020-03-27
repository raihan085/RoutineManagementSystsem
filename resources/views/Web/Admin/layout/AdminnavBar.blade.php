<!-- navbar -->
<nav class="navbar navbar-expand-md bg-light navbar-dark">

  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">


    <div class="container-fluid">
      <div class="row mt-2">

        <!-- top navbar -->
          @include('Web.Admin.layout.topNavBar')
        <!-- end of top navbar -->

        <!-- sidebar -->
         @include('Web.Admin.layout.sideBar')
        <!-- end of side bar -->

        @yield('body')

      </div>

    </div>
  </div>
</div>
<!-- end of navbar -->
