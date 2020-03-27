@extends('Web.Admin.Pages.index')

@section('body')
<div class="col-lg-9 col-md-9 m-5">
  <table class="table table-bordered table-hover">
    <thead class="thead thead-dark">
      <tr>
        <th></th>
        <th>Name</th>
        <th>Email</th>
        <th>Type</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @php $i = 1; @endphp
      @foreach($users as $user)
        <tr>
          <td>{{ $i }}</td>
          <td>{{$user->FullName}}</td>
          <td>{{$user->Email}}</td>
          <td>{{$user->Type}}</td>
          <td>{{$user->Message}}</td>
          <td>
            <form action="{{ route('admin.inbox.delete') }}" method="post">
              @csrf
             <button type="submit" class="btn btn-danger" name="Email" value="{{ $user->Email }}">Delete</button>
            </form>
          </td>
          @php $i++; @endphp
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
