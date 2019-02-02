@extends('layouts.master')
@section('title', '| View')
@section('header_1', 'View')
@section('content')
  <div class="row">
  <div class="col-md-8">
  <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{ $crypto->title }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <br><br>
                  <h3>News</h3>
                  <textarea readonly name="description" cols="70" rows="8">{{ $crypto->description }}</textarea>
                </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="well">
                  <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j,Y h:ia', strtotime($crypto->created_at)) }}</dd>
                  </dl>
                  <dl class="dl-horizontal">
                    <dt>Last Updated At:</dt>
                    <dd>{{ date('M j,Y h:ia', strtotime($crypto->updated_at)) }}</dd>
                  </dl>
                  <hr>
                  <div class="row">
                    <div class="col-sm-6">
                      {!! Html::linkRoute('crypto.edit', 'Edit', [$crypto->id],['class' => 'btn btn-primary btn-block'])!!}
                    </div>
                      <div class="col-sm-6">
                        {!! Form::open(['route' => ['crypto.destroy',$crypto->id],'method' =>'DELETE']) !!}

                        {!! Form::submit('Delete',['class' => 'btn btn-danger btn-block'])!!}

                        {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <img src="{{ asset('images/'.$crypto->image) }}" width="700px" height="500px">
@endsection
