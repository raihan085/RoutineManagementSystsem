@extends('Web.Teacher.Pages.index')

@section('body')
<div class="container m-3 p-3">

  <table class="table table-hover table-bordered m-5 table-sm">
    <thead class="thead-light">
      <tr>
        <th>Day</th>
        <th>8.00-9.00</th>
        <th>9.00-10.00</th>
        <th>10.00-11.00</th>
        <th>11.00-12.00</th>
        <th>12.00-1.00</th>
        <th>1.00-2.00</th>
        <th>2.00-3.00</th>
        <th>3.00-4.00</th>
        <th>4.00-5.00</th>
      </tr>
    </thead>

    <tbody>
        @php $Date = 'null'; @endphp
        @foreach($days as $day)
          <tr>
            @if($Date == $day->Day)
            <td></td>
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
            <td>{{ $day->Day}}</td>
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
