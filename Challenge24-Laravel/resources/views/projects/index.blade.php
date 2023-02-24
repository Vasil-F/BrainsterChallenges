@extends('layouts.main')

@section('logInOut')
    <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-100 hover:bg-gray-200 text-md text-gray-900 font-bold  rounded-xl transition duration-200"
        href="{{ route('dashboard') }}">Логирај се</a>
@endsection
@section('logInOutBurger')
    <div class="pt-6">
        <a class="block px-4 py-3 mb-3 leading-loose text-sm md:text-lg text-center font-semibold leading-none bg-gray-100 hover:bg-gray-200 rounded-xl"
            href="{{ route('dashboard') }}">Логирај се</a>
    </div>
@endsection

@include('layouts.hireModal')

@section('header')
<div id="hero" class="flex flex-col justify-center content-center w-full h-96 text-center text-white p-10">
    <h1 class="lg:text-6xl text-4xl mb-3 md:mb-5">Brainster.xyz Labs</h1>
    <h5 class="lg:text-2xl md:text-lg sm:text-sm">Проекти од академиите на Brainster</h5>
</div>
@endsection

@section('content')
@if (session()->has('success'))
<p class="bg-green-400 w-1/2 mx-auto font-medium mt-2 p-2 text-black-900 border rounded border-black-600">
    {{ session()->get('success') }}</p>
@endif
@if ($errors->any())
@foreach ($errors->all() as $error)
    <p class="bg-red-400 w-1/2 mx-auto font-medium mt-2 p-2 text-black-900 border rounded border-black-600">
        {{ $error }}</p>
@endforeach
@endif
<div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 grid-flow-row place-items-center box-border lg:px-10 md:px-8 px-4  pt-7 pb-7">
    @foreach ($projects as $project)
        <div
            class="card col-span-1 max-w-sm bg-white box-border border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-6 my-8">
            <div class="card-inside" data-id="{{ $project->id }}">
                <img class="rounded-t-lg w-full lg:h-44 xl:h-60 h-60" src="{{ $project->image }}" alt="" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ $project->name }}
                    </h5>
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $project->subtitle }} </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $project->desc }} </p>
                    <a href=" {{ $project->link }} "
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        View project
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>

            </div>
        
        </div>
    @endforeach
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
