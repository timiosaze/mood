@extends('layouts.app')

@section('content')

<section class="my-24">
    <div class="w-full mx-auto max-w-screen-md">
        <div class="mb-6">
            <h1 class="text-gray-900 font-bold text-2xl">Create Blog</h1>
        </div>
        <form action="{{route('blog_store')}}" method="POST" multipart="" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="topic">
                    Image
                </label>
                <input name="image" class="w-full py-2 px-3 text-gray-700 leading-tight" id="username" type="file" accept="image/png, image/jpeg">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="topic">
                    Title
                </label>
                <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="topic">
                    Section
                </label>
                <input name="section" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
            </div>
            <div class="form-group mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                    Body
                </label>
                <textarea name="body" id="blog-editor"></textarea>
            </div>
            <div class="form-group mb-6 text-end">
               <button type="submit" class="py-2 px-3 bg-gray-700 hover:bg-gray-900 rounded-sm text-white">Submit</button>
            </div>
        </form>
    </div>
</section>

@endsection