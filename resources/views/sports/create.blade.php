@extends('layouts.master')
@section('title', '| Create New Data')
@section('header_1', 'Create')
@section('content')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>Add News</h1>
        <hr>
        {!! Form::open(['route' => 'sports.store','files' =>true]) !!}
        {{ Form::label('title','Heading:') }}
        {{ Form::text('title',null,['class'=>'form-control']) }}
        {{ Form::label('description','Description:') }}
        {{ Form::textarea('description',null,['class'=>'form-control']) }}
      
<br>
        {{ Form::label('featured_image','Upload Featured Image:') }}
        {{ Form::file('featured_image')}}
        {{ Form::submit('Submit',['class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px']) }}
        {!! Form::close() !!}
      </div>
    </div>
@endsection
