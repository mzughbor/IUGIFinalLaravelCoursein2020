@extends('layouts.app')
@section('content')
    <a href="{{config('app.path')}}todo/{{$todo->id}}" class="btn btn-primary">Go To The Todo</a>
    <br><br>
    {{ Form::open(['action' => ['ToDosController@update',$todo->id],'method'=>'PUT']) }}
        {{ Form::bsText('text',$todo->text) }}
        {{ Form::bsTextArea('body',$todo->body) }}
        {{ Form::bsText('due',$todo->due) }}
        {{ Form::hidden('_method','PUT') }}
        {{ Form::bsSubmit('Update',['class'=>'btn btn-primary']) }}
    {{ Form::close() }}
@endsection