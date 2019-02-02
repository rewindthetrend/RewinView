@extends('layouts.master')
@section('title', '| Crypto')
@section('header_1', 'Add')
@section('content')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>Add News</h1>
        <hr>
        {!! Form::open(['route' => 'crypto.store','files' =>true]) !!}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            $("#crypto_tab").addClass('menu-open');
        </script>
@endsection
