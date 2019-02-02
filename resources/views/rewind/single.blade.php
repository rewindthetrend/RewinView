@extends('layouts.master')
@section('title', "|  $post->slug ")
@section('header_1', " $post->slug ")
@section('content')


<div class="row">
  <div class="col-md-8">
    <h1>{{ $post->slug }}</h1>
    <p>{{ $post->slug }}</p>
  </div>

</div>

@endsection
