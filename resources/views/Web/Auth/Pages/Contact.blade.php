@extends('Web.Auth.Pages.indexLogIn')

@section('contact')
<div class="container">
  <form action="{{ route('user.contact') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" name="Name" id="name" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="Email" id = "email" class="form-control">
    </div>

    <div class="form-group">
      <label for="">Type</label>
      <select class="form-control" name="type">
        <option>Student</option>
        <option>Teacher</option>
        <option>Office Staff</option>
        <option>Others</option>
      </select>
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <input type="text" name="Message" id="message" class="form-control" height="150">
    </div>

    <button type="submit" class="form-control btn btn-primary">Submit</button>
  </form>
</div>
@endsection
