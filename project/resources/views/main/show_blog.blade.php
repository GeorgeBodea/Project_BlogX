@extends('layouts.app')

@section('content')

<div class="w-3/4 m-auto text-left">
  <div class="py-14">
    <h1 class="text-5xl">
      {{ $blog->title }}
    </h1>
  </div>
<div>

   <div>
      <img src="{{ asset('/images') . '/' . $blog->path_image }}" alt="img">
    </div>

<div class="w-3/4 m-auto pt-18">
  <span class= "text-gray-400">
    By <span class="font-bold italic text-gray-800">
    {{ $blog->user->name }} </span>
    Created on {{ date('jS M Y', strtotime($blog->updated_at)) }}
  </span>

  <p class="text-xl text-gray-600 pt-6 pb-8 leading-7 font-light">
    {{ $blog->details }}
  </p>
</div>


@endsection