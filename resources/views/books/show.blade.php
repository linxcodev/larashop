@extends('layouts.global')

@section('title') Detail user @endsection
@section('pageTitle') Detail User @endsection
@section('content')
  <div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <label><b>Category name</b></label><br>
        {{$category->name}}

        <br><br>

        <label><b>Category slug</b></label><br>
        {{$category->slug}}
        <br><br>

        <label><b>Category image</b></label><br>
        @if($category->image)
          <img src="{{asset('storage/' . $category->image)}}" width="120px">
        @else
          No image
        @endif
      </div>
    </div>
  </div>
@endsection
