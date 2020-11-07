@extends('layouts.app')

@section('content')
<div class ="col-sm-4">
 Número de transacción <input type="text">
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
</select>
</div>

<br><br>
<table class="table table-striped">
<thead>
  <tr>

    <th>Id</th>
    <th>Nombre</th>
    <th>Descripción </th>
    <th>Destino</th>
    <th>Origen</th>
    <th>Inicio</th>
    <th>Fin</th>

  </tr>

 </thead> 

<tbody>
@foreach($transactions as $tr)
 <tr>
<td>{{$loop->iteration}}</td>
<td>{{$tr->name}}</td>
<td>{{$tr->description}}</td>
<td>{{$tr->destination}}</td>
<td>{{$tr->origin}}</td>
<td></td>
<td></td>

</tr>
@endforeach
 </tbody>

</table>
@endsection