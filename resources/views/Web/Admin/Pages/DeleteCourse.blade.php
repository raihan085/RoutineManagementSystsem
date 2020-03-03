@extends('Web.Admin.Pages.index')

@section('body')

<div class="row">
  <!-- course search -->
  <div class="col-md-9 m-3 p-2">
    <form action="{{ URL::to('/search') }}" method="post" role="search">
          {{ csrf_field() }}
          <div class="input-group">
            <input type="text" name="SearchData" class="form-control" placeholder="Search">
             <button type="button" class="btn btn-white">
              <i class="fas fa-search text-danger"></i>
            </button>
          </div>
    </form>

    <!-- showing course  in database -->

  </div>
  <!-- end of course search -->

  <!-- edit course -->
  <div class="card col-md-9 mx-3">
      <div class="card-header">
        Edit Course
      </div>

      <div class="card-body">
        <form action="EditCourseSubmit" method="post">
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
            <div class="form-group row">
              <label for="CourseCredit" class="col-sm-6 col-form-label mt-2">Credit</label>
              <div class="col-sm-6 mt-2">
                <input type="text" name="Credit" id="CourseCredit" class="form-control">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>

  </div>
  <!-- end of course edit -->
</div>



@endsection
