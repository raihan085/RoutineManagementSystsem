<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <table style="width:100%">
    <tr>
      <th>Day</th>
      <th>Semester</th>
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
    <tr>
      @php
            $DayTimes = array("Sunday","Monday","Tuesday","Wednesday","Thuesday");
          @endphp

            @foreach($DayTimes as $DayTime)
              @if($DayTime == $d)
              <tr>
                <td>{{ $DayTime }}</td>
              </tr>
              @endif
            @foreach($days as $day)
              @if($day -> Day == $DayTime)
             <tr>
               <td> </td>
               <td>{{ $day -> YrToSe }}</td>
               <td>{{ $day -> EightToNine }}</td>
               <td>{{ $day -> NineToTen }}</td>
               <td>{{ $day -> TenToEleven }}</td>
               <td>{{ $day -> ElevenToTwelve }}</td>
               <td>{{ $day -> TwelveToOne }}</td>
               <td>{{ $day -> OneToTwo }}</td>
               <td>{{ $day -> TwoToThree }}</td>
               <td>{{ $day -> ThreeToFour }}</td>
               <td>{{ $day -> FourToFive }}</td>
             </tr>
             @endif
             @endforeach
             @endforeach
      <td></td>

      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
    </tr>
  </table>

  </body>
</html>
