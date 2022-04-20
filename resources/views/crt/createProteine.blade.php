@extends('layouts.app')

@section('content')
<h1>Add Proteine Items</h1>
{!! Form::open(['action' => 'c2@storeProteine', 'method' => 'POST']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Food Item')}}
    		{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Write the name of the food item.'])}}
    	</div>

    	<div class="form-group">
    		{{Form::label('body', 'Price')}}
    		{{Form::text('body', '', ['class' => 'form-control', 'placeholder' => 'Write the price of the food item.'])}}
    	</div>

    	
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}	
{!! Form::close() !!}
@endsection