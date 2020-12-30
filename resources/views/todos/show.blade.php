{{-- @extends('main.mainLayout') --}}
@extends('layouts.app')
@section('content')
    <a href="{{config('app.path')}}">
        <button class="btn btn-primary" style="margin:2% 0%;">Show All Todos</button>
    </a>
    <h2>{{$todo->text}}</h2>
    <div class="badge badge-pill badge-danger">
        {{$todo->due}}
    </div>
    <hr>
    <p>{{$todo->text}}</p>
    <br>
    <a href="{{config('app.path')}}todo/{{$todo->id}}/edit" class="btn btn-primary">Edit Todo</a>
    <br><br>
    {{ Form::open(['action' => ['ToDosController@destroy',$todo->id],'method'=>'DELETE']) }}
        {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}
    {{ Form::close() }}

@endsection
