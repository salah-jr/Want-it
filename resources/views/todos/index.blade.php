@extends('layouts.app')

@section('content')
    

<h1>Todos</h1>
@if(count($todos)> 0)
    @foreach ($todos as $todo)
        <div class="card card-body">

            <h3>
                <a href="todo/{{$todo->id}}"> {{$todo->text}} </a><span class="badge badge-primary">{{$todo->due}}</span>
                    <p class="d-inline">
                       
                        {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method'=> 'POST', 'class'=> 'float-right']) !!}

                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
                            
                        {!! Form::close() !!} 
                        
                        <a class="btn btn-default btn-dark text-white float-right edit" href="/todo/{{$todo->id}}/edit">Edit</a>
                    </p>
            </h3>
           
        </div>
        <br>
    @endforeach

@endif


@endsection