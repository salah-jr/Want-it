@extends('layouts.app')

@section('content')
<a href="/" class="btn btn-secondary">Go Back</a>
<h1>Edit TODO</h1>    
<br>
{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method'=> 'post']) !!}


   {{ Form::bsText('text', $todo->text) }}
   {{ Form::bsTextArea('body', $todo->body) }} 
   {{ Form::bsText('due', $todo->due) }}
   {{ Form::hidden('_method', 'PUT') }}
   {{ Form::bsSubmit('Update', ['class' => 'btn btn-primary']) }}
 
{!! Form::close() !!}

@endsection