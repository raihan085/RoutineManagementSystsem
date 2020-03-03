  <div class="card m-5 card-sm">
    <div class="card-header">
      Create Account
    </div>

    <div class="card-body">
      <form class="" action="{{ URL::to('user/joinus/request') }}" method="post">
        @csrf
        <div class="row">
          <div class="form-group col-8">
            <label for="fullname" class="mr-2">Full Name: </label>
            <input type="text" id="fullname" class="form-control form-control-sm" placeholder="Enter Full Name" name="FullName">
          </div>

          <div class="form-group col-4">
            <label for="shortname" class="mx-2">Short Name: </label>
            <input type="text" id="shortname" class="form-control form-control-sm" placeholder="Short Name" name="ShortName">
            <small class="form-text text-muted"> If your are Teacher then please, Enter your short name (3 letter)</small>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-6">
              <label for="registrationNumber">Id Number: </label>
              <input type="text" id="registrationNumber" placeholder="Id Number" class="form-control form-control-sm" name="RegistrationNumber">
          </div>

          <div class="form-group col-6">
            <label for="titel">Type</label>
            <select class="form-control form-control-sm" id = "titel" name="Type">
                <option value="Teacher">Teacher</option>
                <option value="Student">Student</option>
                <option value="Staff">Staff</option>
            </select>
          </div>
      </div>

        <div class="form-group">
          <label for="emailaddress">Email Address: </label>
          <input type="email" id="emialaddress" class="form-control form-control-sm" name="Email">
        </div>

        <div class="form-group">
          <label for="designation">Designation</label>
          <input type="text" id="designation" class="form-control form-control-sm" name="Designation">
        </div>

        <div class="row">
          <div class="form-group col-6">
            <label for="session">Session</label>
            <select class="form-control form-control-sm" id="session" name="Session">
              <option value="2015-16">2015-16</option>
              <option value="2016-17">2016-17</option>
              <option value="2017-18">2017-18</option>
              <option value="2018-19">2018-19</option>
              <option value="2019-20">2019-20</option>
            </select>
          </div>

          <div class="form-group col-6">
            <label for="section">Section</label>
            <select class="form-control form-control-sm" id="section" name="Section">
              <option value="A">A</option>
              <option value="B">B</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="text" id="phone" class="form-control form-control-sm" name="PhoneNumber">
        </div>

        <div class="form-group">
          <label for="photo">Photo</label>
          <input type="file" id="photo" class="form-control-file form-control-sm" name="Photo">
          <small class="form-text form-text-muted">Max size (3MB)</small>
        </div>

        <div class="row">
          <div class="form group col-6">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control form-control-sm" name="pwd">
          </div>

          <div class="form group col-6">
            <label for="re-password">Re-Password</label>
            <input type="password" id="re-password" class="form-control form-control-sm" name="rpwd">
          </div>
        </div>

        <div class="form-check">
            <label for="" class="form-check-label">
              <input type="checkbox" class="form-check-input" name="TAC" value="true">Terms and Condition
            </label>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
