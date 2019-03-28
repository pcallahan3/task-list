
@extends('layouts.app')
@include('inc.navbar')

@section('content')
<h1>Tasks</h1>

@if(count($tasks) > 0)
  @foreach ($tasks as $task)
  <div class="well">
    <h3><a href="task/{{$task->id}}">{{$task->text}}</a><span class="label label-danger">{{$task->due}}</span></h3>
  </div>
  @endforeach
@endif
@endsection
