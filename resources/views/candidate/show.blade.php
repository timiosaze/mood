@extends('layouts.app')

@section('content')

    <section class="mt-16 px-2">
        <a href="#" class="flex mx-auto flex-col items-center bg-white rounded-lg  md:flex-row md:max-w-3xl hover:bg-gray-100  dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full h-96 rounded-lg md:h-auto md:w-96 md:rounded-lg" src="{{asset('candidatesPics/atiku.jpg')}}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h1 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Atiku Abubakar</h1>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <p class="mt-8 uppercase">vice dr ifeanyi okowa</p>

            </div>
        </a>
    </section>
    <section class="mx-auto md:max-w-3xl mt-8">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select your country</label>
            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Profile</option>
                <option>Canada</option>
                <option>France</option>
                <option>Germany</option>
            </select>
        </div>
        <div class="sm:invisible text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px">
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Profile</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500" aria-current="page">Dashboard</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Settings</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Contacts</a>
                </li>
                <li>
                    <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
                </li>
            </ul>
        </div>
    </section>

@endsection