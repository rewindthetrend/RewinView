@extends('layouts.master')
@section('title', '| Update')
@section('header_1', 'Update')
@section('content')
  <div class="row">
    <div class="col-md-8">
    {!! Form::model($post,['route' =>['posts.update',$post->id],'method'=> 'PUT','files' =>true])!!}
        <h1>Update Device</h1>
        <hr>
        {{ Form::label('title','Heading:') }}
        {{ Form::text('title',null,['class'=>'form-control']) }}
        {{ Form::label('display','Display:') }}
        {{ Form::text('display',null,['class'=>'form-control']) }}
        {{ Form::label('camera','Camera:') }}
        {{ Form::text('camera',null,['class'=>'form-control']) }}
        {{ Form::label('ram_processor','Ram & Processor:') }}
        {{ Form::text('ram_processor',null,['class'=>'form-control']) }}
        {{ Form::label('battery','Battery:') }}
        {{ Form::text('battery',null,['class'=>'form-control']) }}
        {{ Form::label('price','Price:') }}
        {{ Form::text('price',null,['class'=>'form-control']) }}
        <br>
        {{ Form::label('featured_image','Upload Featured Image:') }}
        {{ Form::file('featured_image')}}<br>
        {{ Form::label('description','Description:') }}
        {{ Form::textarea('description',null,['class'=>'form-control']) }}
        {{ Form::label('slug','Slug:') }}
        {{ Form::text('slug',null,['class'=>'form-control','required','minlength'=>'5','maxlength'=>'255']) }}

    </div>
  <div class="col-md-4">
    <div class="well">
      <dl class="dl-horizontal">
        <dt>Created At:</dt>
        <dd>{{ date('M j,Y h:ia', strtotime($post->created_at)) }}</dd>
      </dl>
      <dl class="dl-horizontal">
        <dt>Last Updated At:</dt>
        <dd>{{ date('M j,Y h:ia', strtotime($post->updated_at)) }}</dd>
      </dl>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          {!! Html::linkRoute('posts.show', 'Cancel', [$post->id],['class' => 'btn btn-danger btn-block'])!!}
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
