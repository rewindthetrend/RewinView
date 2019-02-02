@extends('layouts.master')
@section('title', '| View')
@section('header_1', 'View')
@section('content')
  <div class="row">
  <div class="col-md-8">
  <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{ $sports->title }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <br><br>
                  <h3>News</h3>
                  <textarea readonly name="description" cols="70" rows="8">{{ $sports->description }}</textarea>
                </div>
              </div>
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
                      {!! Html::linkRoute('sports.edit', 'Edit', [$sports->id],['class' => 'btn btn-primary btn-block'])!!}
                    </div>
                      <div class="col-sm-6">
                        {!! Form::open(['route' => ['sports.destroy',$sports->id],'method' =>'DELETE']) !!}

                        {!! Form::submit('Delete',['class' => 'btn btn-danger btn-block'])!!}

                        {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <img src="{{ asset('images/'.$sports->image) }}" width="700px" height="500px">
@endsection
