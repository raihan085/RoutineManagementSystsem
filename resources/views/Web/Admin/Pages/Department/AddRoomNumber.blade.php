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
        <form action="{{ route('admin.add.roomNumber.submit') }}" method="post">
            @csrf

            <div class="form-group row">
              <label for="CourseCode" class="col-sm-6 col-form-label">Room Number</label>
              <div class="col-sm-6">
                <input type="text" name="RoomNumber" id="CourseCode" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="CourseTheoryOrLab" class="col-sm-6 col-form-label mt-2">Room Type</label>
              <select id="CourseTheoryOrLab" name="RoomType" class="form-control col-sm-6 mt-2">
                <option>Theory</option>
                <option>Lab</option>
              </select>
            </div>
            <button type="submit"  class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>

  </div>
  <!-- end of depatment room  -->
</div>

@endsection
