@extends('layouts.app')
<form action="{{url('/transactions/store')}}" method="POST">
{{csrf_field()}}
<label for="Nombre">{{'Nombre'}}<label>
<input type="text" id="name" name="name">
<br>
<label for="description">{{'Descripción'}}<label>
<input type="text" id="description" name="description">
<br>
<label for="destination">{{'Destino'}}<label>
<input type="text" id="destination" name="destination">
<br>
<label for="origin">{{'Origen'}}<label>
<input type="text" id="origin" name="origin">
<br>
<input type="submit"  value="Enviar">
</form> 