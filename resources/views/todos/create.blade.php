@extends('layouts.app')

@section('content')

<h1>Create TODO</h1>    
<br>
{!! Form::open(['action' => 'TodosController@store', 'method'=> 'post']) !!}


   {{ Form::bsText('text') }}
   {{ Form::bsTextArea('body') }} 
   {{ Form::bsText('due') }}
   {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
 
{!! Form::close() !!}

@endsection