@extends('layout/default', ['title'=> 'About us'])

@section('content')

     <img src="{{asset('images/avatar.jpeg')}}" alt="avatar" class="my-12 w-1/2 h-1/2 rounded-full">
     <h2 class="mb-5 text-gray-700">
          Built with <span class="text-link-500">❤</span> by Jemsh Marcel.
     </h2>

     <p>
          <a href="{{ route('home')}}" class="text-indigo-400 text-indigo-600 underline">Revenir à la page d'acceil</a>
      </p>
@endsection
   