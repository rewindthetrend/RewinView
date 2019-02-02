@extends('layouts.master')
@section('title', '| View')
@section('header_1', 'View')
@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>All Devices</h1>
    </div>
    <div class="col-md-2">
      <a href="{{route('sports.create')}}" class="btn btn-h1-spacing btn-lg btn-block btn-primary">Add News</a>
    </div>
    <div class="col-md-12">
      <hr>
    </div>
  </div>
  {{-- end of row --}}
  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Description</th>
          <th>Created At</th>
          <th>View</th>
          <th>Action</th>
        </thead>
        <tbody>
          @foreach ($sports as $post)
            <tr>
              <th>{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>{{ substr($post->description,0 ,50) }}{{ strlen($post->description)> 50 ? "...": ""}}</td>
              <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
              <td><a href="{{ route('sports.show',$post->id) }}" class="btn  btn-primary btn-block">View</a><a href="{{ route('sports.edit',$post->id) }}" class="btn btn-success btn-sm btn-block">Edit</a></td>
              <td>
                {!! Form::open(['route' => ['sports.destroy',$post->id],'method' =>'DELETE']) !!}

                {!! Form::submit('Delete',['class' => 'btn btn-danger btn-block'])!!}

                {!! Form::close() !!}
              </td>

            </tr>

          @endforeach
        </tbody>

      </table>
      <div class="text-center">
        {!! $sports->links(); !!}
      </div>

    </div>

  </div>
@endsection
