@extends('Web.Admin.Pages.index')

@section('body')
  <div class="row">
    <div class="continer col-10">
      <div class="card">
        <div class="card-header">
            Add Class with Session and Semester
        </div>
        <div class="card-body">
          <form action="{{ URL::to('admin/Dashborad/Add/Class') }}" method="post">
            @csrf
            <div class="row m-3">

              <div class="form-group col-3">
                <label for="day">Day</label>
                <select class="form-control form-control-sm" id="day" name="Day">
                  <option>Sunday</option>
                  <option>Monday</option>
                  <option>Tuesday</option>
                  <option>Wednesday</option>
                  <option>Thursday</option>
                </select>
              </div>

              <div class="form-group col-3">
                <label for="session">Session</label>
                <select id="session" class="form-control form-control-sm" name="Session">
                  <option>2015-16</option>
                  <option>2016-17</option>
                  <option>2017-18</option>
                  <option>2018-19</option>
                  <option>2019-20</option>
                </select>
              </div>

              <div class="form-group col-3">
                <label for="semester">Semester</label>
                <select class="form-control form-control-sm" id="semester" name="Semester">
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

              <div class="form-group col-3">
                <label for="section">Section</label>
                <select class="form-control form-contorl-sm" id="section" name="Section">
                  <option>A</option>
                  <option>B</option>
                </select>
              </div>
            </div>


              <div class="row m-3">
                <div class="col-3">
                  <label for="EightToNine">Time: </label>
                  <input type="text" id="EightToNine" value="8.00-9.00" readonly class="form-control form-control-sm form-control-plaintext" name="EightToNine">
                </div>
                  <div class="col-3">
                    <label for="CourseCode">Course Code: </label>
                    <input type="text" id="CourseCode" class="form-control form-control-sm" name="EightToNineCourseCode">
                  </div>
                  <div class="col-3">
                    <label for="TeacherName">Teacher Name: </label>
                    <input type="text" id="TeacherName" class="form-control form-control-sm" name="EightToNineTeacherName">
                  </div>
                  <div class="col-3">
                    <label for="RoomNumber">Room Number: </label>
                    <input type="text" id="RoomNumber" class="form-control form-control-sm" name="EightToNineRoomNumber">
                  </div>
              </div>

              <div class="row m-3">
                <div class="col-3">
                  <label for="NineToTen">Time: </label>
                  <input type="text" id="NineToTen" value="9.00-10.00" readonly class="form-control form-control-sm form-control-plaintext" name="NineToTen">
                </div>
                  <div class="col-3">
                    <label for="CourseCode">Course Code: </label>
                    <input type="text" id="CourseCode" class="form-control form-control-sm" name="NineToTenCourseCode">
                  </div>
                  <div class="col-3">
                    <label for="TeacherName">Teacher Name: </label>
                    <input type="text" id="TeacherName" class="form-control form-control-sm" name="NineToTenTeacherName">
                  </div>
                  <div class="col-3">
                    <label for="RoomNumber">Room Number: </label>
                    <input type="text" id="RoomNumber" class="form-control form-control-sm" name="NineToTenRoomNumber">
                  </div>
              </div>

              <div class="row m-3">
                <div class="col-3">
                  <label for="TenToEleven">Time: </label>
                  <input type="text" id="TenToEleven" value="10.00-11.00" readonly class="form-control form-control-sm form-control-plaintext" name="TenToEleven">
                </div>
                  <div class="col-3">
                    <label for="CourseCode">Course Code: </label>
                    <input type="text" id="CourseCode" class="form-control form-control-sm" name="TenToElevenCourseCode">
                  </div>
                  <div class="col-3">
                    <label for="TeacherName">Teacher Name: </label>
                    <input type="text" id="TeacherName" class="form-control form-control-sm" name="TenToElevenTeacherName">
                  </div>
                  <div class="col-3">
                    <label for="RoomNumber">Room Number: </label>
                    <input type="text" id="RoomNumber" class="form-control form-control-sm" name="TenToElevenRoomNumber">
                  </div>
              </div>

              <div class="row m-3">
                <div class="col-3">
                  <label for="ElevenToTwelve">Time: </label>
                  <input type="text" id="ElevenToTwelve" value="11.00-12.00" readonly class="form-control form-control-sm form-control-plaintext" name="ElevenToTwelve">
                </div>
                  <div class="col-3">
                    <label for="CourseCode">Course Code: </label>
                    <input type="text" id="CourseCode" class="form-control form-control-sm" name="ElevenToTwelveCourseCode">
                  </div>
                  <div class="col-3">
                    <label for="TeacherName">Teacher Name: </label>
                    <input type="text" id="TeacherName" class="form-control form-control-sm" name="ElevenToTwelveTeacherName">
                  </div>
                  <div class="col-3">
                    <label for="RoomNumber">Room Number: </label>
                    <input type="text" id="RoomNumber" class="form-control form-control-sm" name="ElevenToTwelveRoomNumber">
                  </div>
              </div>

              <div class="row m-3">
                <div class="col-3">
                  <label for="TwelveToOne">Time: </label>
                  <input type="text" id="TwelveToOne" value="12.00-1.00" readonly class="form-control form-control-sm form-control-plaintext" name="TwelveToOne">
                </div>
                  <div class="col-3">
                    <label for="CourseCode">Course Code: </label>
                    <input type="text" id="CourseCode" class="form-control form-control-sm" name="TwelveToOneCourseCode">
                  </div>
                  <div class="col-3">
                    <label for="TeacherName">Teacher Name: </label>
                    <input type="text" id="TeacherName" class="form-control form-control-sm" name="TwelveToOneTeacherName">
                  </div>
                  <div class="col-3">
                    <label for="RoomNumber">Room Number: </label>
                    <input type="text" id="RoomNumber" class="form-control form-control-sm" name="TwelveToOneRoomNumber">
                  </div>
              </div>

              <div class="row m-3">
                <div class="col-3">
                  <label for="OneToTwo">Time: </label>
                  <input type="text" id="OneToTwo" value="1.00-2.00" readonly class="form-control form-control-sm form-control-plaintext" name="OneToTwo">
                </div>
                  <div class="col-3">
                    <label for="CourseCode">Course Code: </label>
                    <input type="text" id="CourseCode" class="form-control form-control-sm" name="OneToTwoCourseCode">
                  </div>
                  <div class="col-3">
                    <label for="TeacherName">Teacher Name: </label>
                    <input type="text" id="TeacherName" class="form-control form-control-sm" name="OneToTwoTeacherName">
                  </div>
                  <div class="col-3">
                    <label for="RoomNumber">Room Number: </label>
                    <input type="text" id="RoomNumber" class="form-control form-control-sm" name="OneToTwoRoomNumber">
                  </div>
              </div>

              <div class="row m-3">
                <div class="col-3">
                  <label for="TwoToThree">Time: </label>
                  <input type="text" id="TwoToThree" value="2.00-3.00" readonly class="form-control form-control-sm form-control-plaintext" name="TwoToThree">
                </div>
                  <div class="col-3">
                    <label for="CourseCode">Course Code: </label>
                    <input type="text" id="CourseCode" class="form-control form-control-sm" name="TwoToThreeCourseCode">
                  </div>
                  <div class="col-3">
                    <label for="TeacherName">Teacher Name: </label>
                    <input type="text" id="TeacherName" class="form-control form-control-sm" name="TwoToThreeTeacherName">
                  </div>
                  <div class="col-3">
                    <label for="RoomNumber">Room Number: </label>
                    <input type="text" id="RoomNumber" class="form-control form-control-sm" name="TwoToThreeRoomNumber">
                  </div>
              </div>

              <div class="row m-3">
                <div class="col-3">
                  <label for="ThreeToFour">Time: </label>
                  <input type="text" id="ThreeToFour" value="3.00-4.00" readonly class="form-control form-control-sm form-control-plaintext" name="ThreeToFour">
                </div>
                  <div class="col-3">
                    <label for="CourseCode">Course Code: </label>
                    <input type="text" id="CourseCode" class="form-control form-control-sm" name="ThreeToFourCourseCode">
                  </div>
                  <div class="col-3">
                    <label for="TeacherName">Teacher Name: </label>
                    <input type="text" id="TeacherName" class="form-control form-control-sm" name="ThreeToFourTeacherName">
                  </div>
                  <div class="col-3">
                    <label for="RoomNumber">Room Number: </label>
                    <input type="text" id="RoomNumber" class="form-control form-control-sm" name="ThreeToFourRoomNumber">
                  </div>
              </div>

              <div class="row m-3">
                <div class="col-3">
                  <label for="FourToFive">Time: </label>
                  <input type="text" id="FourToFive" value="4.00-5.00" readonly class="form-control form-control-sm form-control-plaintext" name="FourToFive">
                </div>
                  <div class="col-3">
                    <label for="CourseCode">Course Code: </label>
                    <input type="text" id="CourseCode" class="form-control form-control-sm" name="FourToFiveCourseCode">
                  </div>
                  <div class="col-3">
                    <label for="TeacherName">Teacher Name: </label>
                    <input type="text" id="TeacherName" class="form-control form-control-sm" name="FourToFiveTeacherName">
                  </div>
                  <div class="col-3">
                    <label for="RoomNumber">Room Number: </label>
                    <input type="text" id="RoomNumber" class="form-control form-control-sm" name="FourToFiveRoomNumber">
                  </div>
              </div>

      <div class="form-group ml-4">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>
        </div>
      </div>
    </div>
  </div>

@endsection
