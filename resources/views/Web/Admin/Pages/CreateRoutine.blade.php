@extends('Web.Admin.Pages.index')

@section('body')
    <div class="m-3">
      <form action="CreateRoutineSubmit" method="post">
        @csrf
        <div class="form-group ">
          <label for="Year" class="mx-5 bg-secondary px-3 py-1">Year</label>
          <select class="px-4 py-1 bg-info text-white text-center" name="Session" id="Year">
            <option>2018-19</option>
            <option>2019-20</option>
            <option>2020-21</option>
            <option>2021-22</option>
          </select>
        </div>


        <div class="form-check form-check-inline mx-2 my-2">

            <input type="checkbox" id="1/1" class="form-check-input mx-5" value="1/1" name="first semester">
            <label for="1/1" class="form-check-label">First Year First Semester</label>

        </div>
        <br>
        <div class="form-check form-check-inline mx-2 my-2">

            <input type="checkbox" id="1/1" class="form-check-input mx-5" value="1/2" name="second semester">
            <label for="1/1" class="form-check-label">First Year Second Semester</label>

        </div>
        <br>
        <div class="form-check form-check-inline mx-2 my-2">

            <input type="checkbox" id="2/1" class="form-check-input mx-5" value="2/1" name="third semester">
            <label for="2/1" class="form-check-label">Second Year First Semester</label>

        </div>
        <br>
        <div class="form-check form-check-inline mx-2 my-2">

            <input type="checkbox" id="2/2" class="form-check-input mx-5" value="2/2" name="fourth semester">
            <label for="2/2" class="form-check-label">Second Year Second Semester</label>

        </div>
        <br>
        <div class="form-check form-check-inline mx-2 my-2">

            <input type="checkbox" id="3/1" class="form-check-input mx-5" value="3/1" name="fivth semester">
            <label for="3/1" class="form-check-label">Third Year First Semester</label>

        </div>
        <br>
        <div class="form-check form-check-inline mx-2 my-2">

            <input type="checkbox" id="3/2" class="form-check-input mx-5" value="3/2" name="sixth semester">
            <label for="3/2" class="form-check-label">Third Year Second Semester</label>

        </div>
        <br>
        <div class="form-check form-check-inline mx-2 my-2">

            <input type="checkbox" id="4/1" class="form-check-input mx-5 " value="4/1" name="seven semester">
            <label for="4/1" class="form-check-label">Fourth Year First Semester</label>

        </div>
        <br>
        <div class="form-check form-check-inline mx-2 my-2">

            <input type="checkbox" id="4/2" class="form-check-input mx-5 " value="4/2" name="eight semester">
            <label for="4/2" class="form-check-label">Fourth Year Second Semester</label>

        </div>
        <br>
          <button type="submit" class="btn btn-primary mx-5 my-2">Submit</button>
      </form>
    </div>

@endsection
