@extends('layouts.app')

@section('content')
  <div class="w-3/5 m-auto text center">
    <div class="py-14 border-b border-gray-300">
      <h1 class="text-5xl">
        Blogs
      </h1>
    </div>
  </div>

  @if (session()->has('message'))
    <div class="w-3/5 m-auto mt-10 pl-2">
      <p class="w-2/6 mb-4 text-gray-50 bg-green-400 rounded-2xl py-4">
        {{ session()->get('message') }}
      </p>
    </div>
  @endif

  @if (Auth::check())
    <div class="pt-15 w-3/5 m-auto">
      <a 
        href="/blog/create"
        class="bg-blue-400 uppercase bg-transparent text-gray-100 text-cs font-extrabold py-2 px-4 rounded-2xl">
        Create blog
      </a>
    </div>
  @endif

  @foreach ($blogs as $blog)
      <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
      <div>
        <img src="{{ asset('/images') . '/' . $blog->path_image }}" alt="img">
      </div>

      <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
          {{ $blog->title }}
        </h2>

        <span class="text-gray-500">
          By <span class="font-bold italic text-gray-800"> {{ $blog->user->name }} </span>, Create on {{ date('jS M Y', strtotime($blog->updated_at)) }}
        </span> 

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
          {{ $blog->details }}
        </p>

        <a href="/blog/{{ $blog->id }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
        Read more
        </a>

        @if (isset(Auth::user()->id) && Auth::user()->id == $blog->user_id)
          <span class="float-right">  
            <a href="/blog/{{ $blog->id }}/edit"
              class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
              Edit 
            <a>
          </span>

          <span class="float-right">
            <form action="blog/{{ $blog->id }}"
            method="POST">
            @csrf 
            @method('delete')

            <button
              class="text-red-500 pr-3"
              type="submit">
            Delete this blog
            </button>
          </span>
        @endif
        
        </div>
      </div>
    @endforeach

@endsection