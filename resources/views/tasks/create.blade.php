@extends('layouts.app')
@section('content')
  <h1>Create Task</h1>
  {!! Form::open(['action' => 'TaskListController@store']) !!}
	//
  {!! Form::close() !!}
@endsection
