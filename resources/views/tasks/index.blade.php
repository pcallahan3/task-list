
@extends('layouts.app')

@section('content')

<h1>Tasks</h1>

@if(count($tasks) > 0)
  @foreach ($tasks as $task)
  <div class="jumbotron">
    <h3>{{$task->text}}</h3>
    <span class="label label-danger">{{$task->due}}</span>
  </div>
  @endforeach
@endif
@endsection
