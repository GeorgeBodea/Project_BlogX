@extends('layouts.app')

@section('content')
<div class="w-3/4 m-auto text-left">
  <div class="py-14">
    <h1 class="text-4xl">
      Update Blog
    </h1>
  </div>
<div>

@if ($errors->any()) 
  <div class="w-3/4 m-auto">
    <ul>
      @foreach ($errors->all() as $error) 
        <li class="w-2/5 mb-3 text-gray-40 bg-red-600 round">
          {{ $error }}
        </li>
      @endforeach
    </ul>
  </div>
@endif 

<div class="w-3/4 m-auto pt-18">
  <form
    action="/blog/{{ $blog->id }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf 
    @method('PUT')

      <input 
        type="text"
        name="title"
        value="{{ $blog->title }}"
        class="bg-transparent block border-b-2 w-full h-20 text-6xl outile-none">
      
      <textarea
        name="details"
        placeholder="Details..."
        class="py-18 bg-transparent block border-b-2 w-full h-650 text-xl outlile-none">{{ $blog->details }}
      </textarea>


      <button 
        type="submit"
        class="uppercase mt-14 bg-blue-400 text-gray-200 text-lg font-extrabold py-3 px-6 rounded-2xl">
        Submit Blog
      </button>
      
  </form>
</div>

@endsection