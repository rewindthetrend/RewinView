@extends('layouts.master')
@section('title', '| Update')
@section('header_1', 'Update')
@section('content')
  <div class="row">
    <div class="col-md-8">
    {!! Form::model($sports,['route' =>['sports.update',$sports->id],'method'=> 'PUT','files' =>true])!!}
        <h1>Update News</h1>
        <hr>
        {{ Form::label('title','Heading:') }}
        {{ Form::text('title',null,['class'=>'form-control']) }}
        <br>
        {{ Form::label('featured_image','Upload Featured Image:') }}
        {{ Form::file('featured_image')}}<br>
        {{ Form::label('description','Description:') }}
        {{ Form::textarea('description',null,['class'=>'form-control']) }}

    </div>
  <div class="col-md-4">
    <div class="well">
      <dl class="dl-horizontal">
        <dt>Created At:</dt>
        <dd>{{ date('M j,Y h:ia', strtotime($sports->created_at)) }}</dd>
      </dl>
      <dl class="dl-horizontal">
        <dt>Last Updated At:</dt>
        <dd>{{ date('M j,Y h:ia', strtotime($sports->updated_at)) }}</dd>
      </dl>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          {!! Html::linkRoute('sports.show', 'Cancel', [$sports->id],['class' => 'btn btn-danger btn-block'])!!}
        </div>
          <div class="col-sm-6">
            {{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block']) }}
        </div>
      </div>
    </div>
  </div>
  {!! Form::close() !!}
  </div>
@endsection
