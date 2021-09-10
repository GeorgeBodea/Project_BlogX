@extends('layouts.app')

@section('content')
  <div style="background-image: url('https://images.unsplash.com/1/work-stations-plus-espresso.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
              background-position: center center;
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
              height: 600px; ">
    <div class="flex text-gray-100 pt-10">
      <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
        <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
          Hellow there! Read amazing stories about incredible people
        </h1>

        <a href="/blog"
           class="text-center bg-gray-50 text-gray-700 py-2 px-4 text-xl rounded-2xl">
           Click here
        </a>
      </div>
    </div>
  </div>
@endsection