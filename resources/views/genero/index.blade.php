@extends('layouts.admin')

@section('content')
@include('genero.modal')
@include('alerts.request')
@include('alerts.successjson')
<table class="table">
    <thead>
    <th>Nombre</th>
    <th>Operaciones</th>
</thead>
<tbody id="datos">
<td></td>
<td></td>
</tbody>

</table>

@endsection

@section('scripts')
{!!Html::script('js/script2.js')!!}
@endsection