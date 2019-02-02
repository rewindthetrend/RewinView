@extends('layouts.master')
@section('title', '| Create New Data')
@section('header_1', 'Create')
@section('content')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>Add New Gadjet</h1>
        <hr>
        {!! Form::open(['route' => 'posts.store','files' =>true]) !!}
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
        {{ Form::label('description','Description:') }}
        {{ Form::textarea('description',null,['class'=>'form-control']) }}
        {{ Form::label('slug','Slug:') }}
        {{ Form::text('slug',null,['class'=>'form-control','required','minlength'=>'5','maxlength'=>'255']) }}
<br>
        {{ Form::label('featured_image','Upload Featured Image:') }}
        {{ Form::file('featured_image')}}
        {{ Form::submit('Submit',['class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px']) }}
        {!! Form::close() !!}
      </div>
    </div>
@endsection
<script type="text/javascript">
$("#view_all_device,#add_new_device").addClass('nav-item has-treeview menu-open active');  
</script>
