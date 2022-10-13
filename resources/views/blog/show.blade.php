@extends('layouts.app')

@section('content')

<section class="my-24">
    <div class="w-full mx-auto max-w-screen-md">
        <div class="mb-6">
            <img src="{{$path}}" class="mx-auto object-cover w-full h-96" alt="">
        </div>
        <div class="">
            <h1 class="text-gray-900 font-bold text-2xl">{{$blog->title}}</h1>
        </div>
        <div class="mb-6">
            <p class="text-gray-900 font-bold text-2xl">{{$blog->section}}</p>
        </div>
        <div class="mb-6">
           {!! $blog->body !!}
        </div>
    </div>
</section>

@endsection