<!-- sidebar -->
<div class="col-lg-2 col-md-2 sidebar bg-dark mt-4">
  <a href="{{ route('admin') }}" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">
    <img src="{{ asset('Web/Logo/SUST.png') }}" alt="LOGO" width="50">
  </a>
  <div class="bottom-border pb-3">
    <img src="{{ asset('Web/Pic/Admin/SaifSir.jpg') }}" width="50" class="rounded-circle mr-3">
        {{ Auth::guard('profile')->user()->FullName }}
  </div>

  <ul class="navbar-nav flex-column mt-4">

    <!-- <li class="nav-item sidebar-link">
      <a href="{{ route('admin') }}" class="nav-link text-white p-3">
        <i class="fas fa-home text-light fa-lg mr-3"></i>Dashborad
      </a>
    </li> -->
    <li class="nav-item sidebar-link">
      <a href="{{ route('admin') }}" class="nav-link text-white p-3">
        <i class="fas fa-home text-light fa-lg mr-3"></i>Full Routine
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ url('admin/dashborad/user/request') }}" class="nav-link text-white p-3">
        <i class="fas fa-home text-light fa-lg mr-3"></i>Request
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ URL::to('admin/dashborad/user/request') }}" class="nav-link text-white p-3">
        <i class="fas fa-inbox text-light fa-lg mr-3"></i>Inbox
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ route('admin.add.class') }}" class="nav-link text-white p-3">
        <i class="fas fa-plus text-light fa-lg mr-3"></i>Add Class
      </a>
    </li>

    <li class="nav-item sidebar-link dropdown">
      <a href="{{ route('admin.add.course') }}" class="nav-link text-white p-3 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="syllabusdropdownmenu">
        <i class="fas fa-plus text-light fa-lg mr-3"></i>Syllabus
      </a>
      <ul class="dropdown-menu" aria-labelledby="syllabusdropdownmenu">
        <li class="dropdown-item">
          <a href="{{ route('admin.add.course')}}" class="btn btn-primary">
            <i class="fas fa-plus text-white fa-lg mr-3"></i> Add Course
          </a>
        </li>
        <li class="dropdown-item">
          <a href="{{ route('admin.edit.course') }}" class="btn btn-info">
                <i class="fas fa-edit text-light fa-lg mr-3"></i>Update Course
          </a>
        </li>
        <li class="dropdown-item">
          <a href="{{ route('admin.delete.course') }}" class="btn btn-danger">
              <i class="fas fa-trash-alt text-light fa-lg mr-3"></i>Delete Course
          </a>
        </li>
      </ul>
    </li>
    <li class="dnav-item sidebar-link">
      <a href="{{ route('admin.add.roomNumber')}}" class="nav-link text-white p-3">
        <i class="fas fa-plus text-white fa-lg mr-3"></i> Add Room
      </a>
    </li>
    <li class="nav-item sidebar-link">
      <a href="{{ route('admin.delete.account') }}" class="nav-link text-white p-3">
        <i class="fas fa-user-minus text-light fa-lg mr-3"></i>Delete Account
      </a>
    </li>
  </ul>

</div>
<!-- end of sidebar -->
