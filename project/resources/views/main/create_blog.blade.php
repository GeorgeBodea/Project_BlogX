@extends('layouts.app')

@section('content')
<div class="w-3/4 m-auto text-left">
  <div class="py-14">
    <h1 class="text-6xl">
      Create Blog 
    </h1>
  </div>
<div>

@if ($errors->any()) 
  <div class="w-3/4 m-auto">
    <ul>
      @foreach ($errors->all() as $error) 
        <li class="w-2/5 mb-4 text-gray-50 bg-red-700 round">
          {{ $error }}
        </li>
      @endforeach
    </ul>
  </div>
@endif 

<div class="w-4/5 m-auto pt-20">
  <form
    action="/blog"
    method="POST"
    enctype="multipart/form-data">
    @csrf 
      <input 
        type="text"
        name="title"
        placeholder="Title..."
        class="bg-transparent block border-b-2 w-full h-20 text-6xl outile-none">
      
      <textarea
        name="details"
        placeholder="Description..."
        class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outile-none">
      </textarea>

      <div class="bg-grey-lighter pt-13">
        <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
          <span class="mt-2 text-base leading-normal">
            Select file
          </span>

          <input
            type="file"
            name="image"
            class="hidden">

        </label>
      </div>

      <button 
        type="submit"
        class="uppercase mt-14 text-lg font-bold  bg-blue-400 text-gray-200 py-3 px-7 rounded-2xl">
        Submit Blog
      </button>
      
  </form>
</div>

@endsection