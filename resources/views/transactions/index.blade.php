@extends('layouts.app')

@section('content')
<div class ="col-sm-4">
 {{--  Número de transacción <input type="text">
</div>
<div class ="col-sm-4">
<select >
<option value="something">Fecha Inicial</option>
<option value="something_else">something else</option>
</select>
</div>
<div class ="col-sm-4">
<select >
<option value="something">Fecha Fin</option>
<option value="something_else">something else</option>
</select>  --}}
</div>

<br><br>
<table class="table table-striped">
<thead>
  <tr>
    <th>Id Registro</th>
    <th>Id Petición</th>
    <th>Fecha transacción</th>
    <th>Origen </th>
    <th>Estado</th>    
    <th>destino</th>


  </tr>

 </thead> 

<tbody>
@foreach($transactions as $tr)
 <tr>
<td>{{$loop->iteration}}</td>
<td>{{$tr->petition_id}}</td>
<td>{{$tr->created_at}}</td>
<td>{{$tr->origin}}</td>
<td>{{$tr->status}}</td>
<td>{{$tr->destination_id}}</td>


</tr>
@endforeach
 </tbody>

</table>
@endsection