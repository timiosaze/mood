@extends('layouts.app')

@section('content')

    <section class="mt-16 px-2">
        <a href="#" class="flex mx-auto flex-col items-center bg-white rounded-lg  md:flex-row md:max-w-3xl hover:bg-gray-100  dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full h-96 rounded-lg md:h-auto md:w-96 md:rounded-lg" src="{{asset('candidatesPics/atiku.jpg')}}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h1 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Atiku Abubakar</h1>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <p class="mt-8 uppercase font-light">vice dr ifeanyi okowa</p>

            </div>
        </a>
    </section>
    <section class="mx-auto md:max-w-3xl mt-12">
        <p class="uppercase font-thin mb-2">latest comments</p>
        <div class="flex lg:flex-row sm:flex-col justify-between items-center">
            <a href="#" class="block p-4 w-72 mb-2 bg-white rounded-lg border border-gray-200 shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="font-normal text-sm text-justify text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <h5 class="mt-2 text-base font-bold tracking-tight text-end text-gray-900 dark:text-white">Lovina Freezie</h5>
            </a>

            <a href="#" class="block p-4 w-72 mb-2 bg-white rounded-lg border border-gray-200 shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="font-normal text-sm text-justify text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <h5 class="mt-2 text-base font-bold tracking-tight text-end text-gray-900 dark:text-white">Lovina Freezie</h5>
            </a>
        </div>
        <div class="my-2 float-right">
            <a href="#" class=" text-xs text-blue-500 hover:underline hover:text-blue-800">View More Comments</a>
        </div>
        <div class="clear-right"></div>
        <div class="flex items-center  justify-center">
            <a href="#" class="text-center py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-medium rounded text-base">Add Comment</a>
        </div>
    </section>

@endsection