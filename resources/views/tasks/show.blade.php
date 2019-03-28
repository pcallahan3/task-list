@extends('layouts.app')
@section('content')
  <h1><a href="task/{{$task->id}}">{{$task->text}}</a></h1>
  <div class="label label-danger">{{$task->due}}</div>
  <hr>
  <p>{{$task->body}}</p>
  <a class="btn btn-default" href="/">Go Back</a>
@endsection
