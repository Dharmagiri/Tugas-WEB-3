
   <h1>Hasil aritmatika bilangan</h1>
   <p>Selisih = {{$selisih}}</p>
   <table>
      <thhead>
         <tr>
            <td>Index</td>
            <td>Value</td>
         </tr>
      </thhead>
      <tbody>
         @foreach($deret as $key=>$val)
         <tr>
            <td>{{$key}} </td>
            <td> {{$val}}</td>
         </tr>
         @endforeach
      </tbody>
   </table>
