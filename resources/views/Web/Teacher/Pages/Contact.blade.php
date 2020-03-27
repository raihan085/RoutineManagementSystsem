<div class="container">
  <form action="#" method="post">
    @csrf
    <div class="form-group">
      <label for="name">{{ asset() }}</label>
      <input type="text" name="Name" id="name" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">{{ asset() }}</label>
      <input type="email" name="Email" id = "email" class="form-control">
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <input type="text" name="Message" id="message" class="form-control" height="150">
    </div>

    <button type="submit" class="form-control">Submit</button>
  </form>
</div>
