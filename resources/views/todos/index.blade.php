@extends('layouts.app')

@section('content')
    

<h1>Todos</h1>
@if(count($todos)> 0)
    @foreach ($todos as $todo)
        <div class="card card-body">

            <h3>
                <a href="todo/{{$todo->id}}"> {{$todo->text}} </a><span class="badge badge-primary">{{$todo->due}}</span>
                    <p class="text-right float-right">
                    <a class="btn btn-default btn-dark text-white" href="/edit/{{$todo->id}}">Edit</a> 
                    <a class="btn btn-danger text-white" href="/destroy/{{$todo->id}}">Delete</a>
                    </p>
            </h3>
           
        </div>
        <br>
    @endforeach

@endif


@endsection