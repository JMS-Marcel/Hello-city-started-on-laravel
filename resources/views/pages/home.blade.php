@extends('layout/default')

@section('content')

     <img src="{{asset('images/mg.jpeg')}}" alt="Madagascar" class="mt-12 rounded shadow-md">

     <h1 class="mt-5 text-exl sm:text-5xl font-semibold text-indigo-600">Hello from Madagascar!😊✨</h1>

     <p class="mt-5 text-lg text-gray-800">It's currently {{date('h:i A')}} </p>
@endsection