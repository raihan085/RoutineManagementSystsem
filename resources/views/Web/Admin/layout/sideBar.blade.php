<!-- sidebar -->
<div class="col-lg-3 sidebar bg-dark">
  <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">
    <img src="{{ asset('Web/Logo/SUST.png') }}" alt="LOGO" width="50">
  </a>
  <div class="bottom-border pb-3">
    <img src="{{ asset('Web/Pic/Admin/SaifSir.jpg') }}" width="50" class="rounded-circle mr-3">
        Saiful Saif

  </div>

  <ul class="navbar-nav flex-column mt-4">
    <li class="nav-item sidebar-link">
      <a href="{{ URL::to('admin\Dashborad') }}" class="nav-link text-white p-3">
        <i class="fas fa-home text-light fa-lg mr-3"></i>Dashborad
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ URL::to('author\teacher\Name\MSI') }}" class="nav-link text-white p-3">
        <i class="fas fa-home text-light fa-lg mr-3"></i>Full Routine
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="#" class="nav-link text-white p-3">
        <i class="fas fa-users text-light fa-lg mr-3"></i>Request
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="#" class="nav-link text-white p-3">
        <i class="fas fa-inbox text-light fa-lg mr-3"></i>Inbox
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ URL::to ('admin\Dashborad/Add/Routine') }}" class="nav-link text-white p-3">
        <i class="fas fa-plus text-light fa-lg mr-3"></i>Add Routine
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ URL::to('admin\Dashborad/Add/Class') }}" class="nav-link text-white p-3">
        <i class="fas fa-plus text-light fa-lg mr-3"></i>Add Class
      </a>
    </li>

    <li class="nav-item sidebar-link">
      <a href="{{ URL::to('admin\Dashborad/Add/Course') }}" class="nav-link text-white p-3">
        <i class="fas fa-plus text-light fa-lg mr-3"></i>Add Course
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ URL::to('admin\Dashborad/Edit/Course') }}" class="nav-link text-white p-3">
        <i class="fas fa-edit text-light fa-lg mr-3"></i>Edit Course
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ URL::to('admin\Dashborad/Delete/Course') }}" class="nav-link text-white p-3">
        <i class="fas fa-trash-alt text-light fa-lg mr-3"></i>Delete Course
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ URL::to('admin\Dashborad/Delete/Routine') }}" class="nav-link text-white p-3">
        <i class="fas fa-trash-alt text-light fa-lg mr-3"></i>Delete Routine
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="#" class="nav-link text-white p-3">
        <i class="fas fa-trash-alt text-light fa-lg mr-3"></i>Delete Class
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ URL::to('admin\Dashborad/Delete/Account') }}" class="nav-link text-white p-3">
        <i class="fas fa-user-minus text-light fa-lg mr-3"></i>Delete Account
      </a>
    </li>
  </ul>

</div>
<!-- end of sidebar -->
