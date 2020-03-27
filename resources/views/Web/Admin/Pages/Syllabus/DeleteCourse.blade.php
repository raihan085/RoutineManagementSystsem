@extends('Web.Admin.Pages.index')

@section('body')

  <!-- course search -->
  <div class="col-md-9  col-lg-9 m-5 d-flex-row justify-content-center">
  <!-- end of course search -->

  <!-- edit course -->
  <div class="card col-md-9 mx-3">
      <div class="card-header">
        Delete Course
      </div>

      <div class="card-body">
        <form action="{{ route('admin.delete.course.submit') }}" method="post">
          @csrf
            <div class="form-group row">
              <label for="CourseCode" class="col-sm-6 col-form-label">Course Code</label>
              <div class="col-sm-6">
                <input type="text" name="CourseCode" id="CourseCode" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="CourseName" class="col-sm-6 col-form-label mt-2">Course Name</label>
              <div class="col-sm-6 mt-2">
                <input type="text" name="CourseName" id="CourseName" class="form-control">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>

  </div>
  <!-- end of course edit -->
</div>



@endsection
