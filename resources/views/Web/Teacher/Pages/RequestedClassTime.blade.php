@extends('Web.Teacher.Pages.index')

@section('body')

<div class="container m-5">
    <form action="{{ route('request.class.submit') }}" method="post">
      @csrf
      <div class="form-group row">
        <label for="day">Day</label>
        <select class="form-control" name="day">
          <option>Sunday</option>
          <option>Monday</option>
          <option>Tuesday</option>
          <option>Wednesday</option>
          <option>Thursday</option>
        </select>
      </div>
      <div class="form-group row">
        <label for="courseCode">Course Code</label>
        <input type="text" name="CourseCode" id="courseCode" class="form-control">
      </div>
      <div class="form-group row">
        <label for="section">Section</label>
        <select class="form-control" name="Section" id="section">
          <option>A</option>
          <option>B</option>
        </select>
      </div>
      <div class="form-group row">
        <label for="time">Time</label>
        <select class="form-control" name="Time" id="time">
          <option value="EightToNine">8.00-9.00</option>
          <option value="NineToTen">9.00-10.00</option>
          <option value="TenToEleven">10.00-11.00</option>
          <option value="ElevenToTwelve">11.00-12.00</option>
          <option value="TwelveToOne">12.00-1.00</option>
          <option value="OneToTwo">1.00-2.00</option>
          <option value="TwoToThree">2.00-3.00</option>
          <option value="ThreeToFour">3.00-4.00</option>
          <option value="FourToFive">4.00-5.00</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection
