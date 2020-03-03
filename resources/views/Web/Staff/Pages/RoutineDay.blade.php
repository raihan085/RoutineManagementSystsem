@extends('Web.Staff.Pages.index')

@section('body')

    <div class="container m-3 p-3">

    <table class="table table-bordered table-hover m-5 table-small">
      <thead class="thead-light">
        <tr>
          <th scope="col">Day</th>
          <th scope="col">Room Number</th>
          <th scope="col">8.00-9.00</th>
          <th scope="col">9.00-10.00</th>
          <th scope="col">10.00-11.00</th>
          <th scope="col">11.00-12.00</th>
          <th scope="col">12.00-1.00</th>
          <th scope="col">1.00-2.00</th>
          <th scope="col">2.00-3.00</th>
          <th scope="col">3.00-4.00</th>
          <th scope="col">4.00-5.00</th>
        </tr>
      </thead>

      <tbody>
          @php $Date = 'null'; @endphp
          @foreach($days as $day)
            <tr>
              @if($Date == $day->Day)
              <th></th>
              <th class="bg-light">{{ $day->RoomNumber }}</th>
              <td> {{ $day->EightToNine }}</td>
              <td> {{ $day->NineToTen }}</td>
              <td> {{ $day->TenToEleven }}</td>
              <td> {{ $day->ElevenToTwelve }}</td>
              <td> {{ $day->TwelveToOne }}</td>
              <td> {{ $day->OneToTwo }}</td>
              <td> {{ $day->TwoToThree }}</td>
              <td> {{ $day->ThreeToFour }}</td>
              <td> {{ $day->FourToFive }}</td>
              @else
              <th class="bg-light">{{$day->Day}} </th>
              <th class="bg-light">{{ $day->RoomNumber }} </th>
              <td> {{ $day->EightToNine }}</td>
              <td> {{ $day->NineToTen }}</td>
              <td> {{ $day->TenToEleven }}</td>
              <td> {{ $day->ElevenToTwelve }}</td>
              <td> {{ $day->TwelveToOne }}</td>
              <td> {{ $day->OneToTwo }}</td>
              <td> {{ $day->TwoToThree }}</td>
              <td> {{ $day->ThreeToFour }}</td>
              <td> {{ $day->FourToFive }}</td>
              @php $Date = $day->Day; @endphp
              @endif

          </tr>
          @endforeach

      </tbody>
    </table>
@endsection
