@extends('Web.Admin.Pages.index')

@section('body')
<div class="col-lg-9 col-md-9 mt-5">
  <!-- course search -->
  <div class="col-md-9 m-3 p-2">

    <!-- showing course  in database -->

  </div>
  <!-- end of course search -->

  <!-- add course -->
  <div class="card col-md-9 ml-5">
      <div class="card-header">
        Add Course
      </div>

      <div class="card-body">
        <form action="{{ route('admin.add.course.submit') }}" method="post">
            @csrf

            <div class="form-group row">
              <label for="semester" class="col col-form-label">Semester</label>
              <select class="col form-control" name="YearToSemester" id="semester">
                <option>1/1</option>
                <option>1/2</option>
                <option>2/1</option>
                <option>2/2</option>
                <option>3/1</option>
                <option>3/2</option>
                <option>4/1</option>
                <option>4/2</option>
              </select>
            </div>

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
                <input type="text" name="Credit"  id="CourseCredit" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="CourseTheoryOrLab" class="col-sm-6 col-form-label mt-2">Course Type</label>
              <select id="CourseTheoryOrLab" name="CourseType" class="form-control col-sm-6 mt-2">
                <option>Theory</option>
                <option>Lab</option>
              </select>
            </div>
            <button type="submit"  class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>

  </div>
  <!-- end of course -->
</div>

@endsection
