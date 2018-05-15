@extends('layouts.admin')

@section('content')
@include('alerts.request')
@include('alerts.successjson')
@include('alerts.errorjson')
{!!Form::open(['route'=>'genero.store','method'=>'POST'])!!}
<input type='hidden' name='_token' value="{{csrf_token()}}" id='toke'/>
@include('genero.forms.genero')


{!!link_to('#', $title = 'Registrar', $attributes = ['id'=>'registro','class'=>'btn btn-primary'], $secure = null)!!}
{!!Form::close()!!}

@endsection
@section('scripts')
{!!Html::script('js/script.js')!!}
@endsection

