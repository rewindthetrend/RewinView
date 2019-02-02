@extends('layouts.master')
@section('title', '| View')
@section('header_1', 'View')
@section('content')
  <div class="row">
  <div class="col-md-8">
  <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{ $post->title }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Specs</th>
                      <th>Details</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Display</td>
                      <td>{{ $post->display }}</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Camera</td>
                      <td>{{ $post->camera }}</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Ram & Processor</td>
                      <td>{{ $post->ram_processor }}</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Battery</td>
                      <td>{{ $post->battery }}</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>price</td>
                      <td>{{ $post->price }}</td>
                    </tr>
                  </tbody></table>
                  <br><br>
                  <h3>More Details</h3>
                  <textarea readonly name="description" cols="70" rows="8">{{ $post->description }}</textarea>
                </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="well">
                  <dl class="dl-horizontal">
                    <label>Url Slug:</label>
                    <dd><a href="{{ url($post->slug)  }}">{{url($post->slug)}}</a></dd>
                  </dl>
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
                      {!! Html::linkRoute('posts.edit', 'Edit', [$post->id],['class' => 'btn btn-primary btn-block'])!!}
                    </div>
                      <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy',$post->id],'method' =>'DELETE']) !!}

                        {!! Form::submit('Delete',['class' => 'btn btn-danger btn-block'])!!}

                        {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <img src="{{ asset('images/'.$post->image) }}" width="700px" height="500px">
@endsection
