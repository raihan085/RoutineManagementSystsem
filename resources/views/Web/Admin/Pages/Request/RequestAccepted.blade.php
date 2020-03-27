@extends('Web.Admin.Pages.index')

@section('body')

<!-- curd banate hobe -->

<div class="col-lg-9 col-md-9 mx-2 mt-5">
  <table class="table table-bordered table-hover table-sm">
    <thead class="thead bg-secondary">
      <th scope="col">Full Name</th>
      <th scope="col">ShortName</th>
      <th scope="col">Registration Id</th>
      <th scope="col">Type</th>
      <th scope="col">Email</th>
      <th scope="col">Designation</th>
      <th scope="col">Session</th>
      <th scope="col">Section</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </thead>

    <tbody>
        @foreach($req as $reqs)
        <tr>
          <td>{{$reqs->FullName}}</td>
          <td>{{$reqs->ShortName}}</td>
          <td>{{$reqs->RegistrationNumber}}</td>
          <td>{{$reqs->Type}}</td>
          <td>{{$reqs->Email}}</td>
          <td>{{$reqs->Designation}}</td>
          <td>{{$reqs->Session}}</td>
          <td>{{$reqs->Section}}</td>
          <td>{{$reqs->PhoneNumber}}</td>
          <td>{{ asset($reqs->Photo) }}</td>
          <td>
            <form action ="{{ route('admin.user.request.accept') }} "method="post">
              @csrf
              <button type="submit" name="accept" value="{{ $reqs->RegistrationNumber }}" class="btn btn-primary m-2">Accept</button>
            </form>
            <form action="{{ route('admin.user.request.delete') }}" method="post">
              @csrf
              <button type="submit" name="delete" value="{{ $reqs->RegistrationNumber}}" class="btn btn-danger m-2">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection
