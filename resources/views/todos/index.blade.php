{{-- @extends('main.mainLayout') --}}
@extends('layouts.app')
@section('content')
    <h2>To Dos</h2>
    @if (count($todos)>0)
        @foreach ($todos as $todo)
        <a href="{{config('app.path')}}todo/{{$todo->id}}" style="text-decoration:none;color:black;">
            <div class="card card-body bg-light" style="padding: 3">
                <h5>{{$todo->text}}
                    <span class="badge badge-pill badge-danger" style="margin-left:0.5%">{{$todo->due}}</span>
                </h5> 
            </div>
        </a>
        <br>
        @endforeach
    @endif
@endsection
