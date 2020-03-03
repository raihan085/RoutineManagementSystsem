<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('Web.includes.CSSJS')
  </head>
  <body>

    <div>
      <h2 class="display 4 text-center">Test Model</h2>
      <form action="{{ URL::to('testsubmit') }}" method="post">
          @csrf
        <div class="form-group">
          <label for="Name">Full Name</label>
          <input type="text" name="FullName" placeholder="Name" id="Name" class="form-control">
        </div>

        <div class="form-group">
          <label for="Email">Email</label>
          <input type="mail" name="Email" class="form-control" placeholder="Email Address" id="Email">
        </div>

        <div class="form-group">
          <label for="pwd">Pasword</label>
          <input type="password" name="pwd" placeholder="Password" id="pwd">
        </div>

        <div class="form-group">
          <label for="rpwd">RePasword</label>
          <input type="password" name="rpwd" placeholder="Re-Password" id="rpwd">
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" placeholder="Title" id="title">
        </div>
        <br>
        <button type="submit" class="form-contronl btn btn-primary">Submit</button>
      </form>
    </div>

  </body>
</html>
