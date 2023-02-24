@extends('layouts.main')

@section('logInOut')
    <form method="POST" action="{{ route('logout') }}"
        class="hidden lg:inline-block lg:ml-auto lg:mr-3 lg:mt-2 py-2 px-4 bg-gray-100 hover:bg-gray-200 text-md text-gray-900 font-bold  rounded-xl transition duration-200">
        @csrf
        <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
    this.closest('form').submit();">Одјави се</a>
    </form>
@endsection
@section('logInOutBurger')
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
            {{ __('Одјави се') }}
        </x-responsive-nav-link>
    </form>
@endsection

@include('layouts.hireModal')
@include('layouts.popupModal')

@section('header')
    <div class="flex justify-between content-center md:h-20 sm:h-28">
        <a class="border rounded p-6 sm:pb-2 text-center bg-orange-200 text-dark hover:bg-orange-400"
            href="{{ route('dashboard') }}">Измени</a>
        <p class="block text-2xl bg-gray-800 text-white text-center p-6">Додај нов производ</p>
        <a class="border rounded p-6 text-center bg-orange-200 text-dark hover:bg-orange-400"
            href="{{ route('projects.create') }}">Додај</a>
    </div>
@endsection

@section('content')
    <div class="container px-10 mx-auto">
        @if (session()->has('success'))
        <p class="bg-green-400 w-1/2 mx-auto font-medium mt-2 p-2 text-black-900 border rounded border-black-600">{{ session()->get('success') }}</p>
            
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="bg-red-400 w-1/2 mx-auto font-medium mt-2 p-2 text-black-900 border rounded border-black-600">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{ route('projects.store') }}" method="POST"
            class="block md:w-1/2 sm:w-80 my-20 mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
            @csrf
            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Слика</label>
                <input type="text" name="image" value="{{ old('image') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Image URL">
            </div>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Име</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Name">
            </div>
            <div class="mb-6">
                <label for="subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Поднаслов</label>
                <input type="text" name="subtitle" value="{{ old('subtitle') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Subtitle">
            </div>
            <div class="mb-6">
                <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Опис</label>
                <input type="text" name="desc" value="{{ old('desc') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Description">
            </div>
            <div class="mb-6">
                <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Линк</label>
                <input type="text" name="link" value="{{ old('link') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Image URL">
            </div>


            <button type="submit"
                class="text-white w-1/2 block bg-blue-700 my-3 mx-auto hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Испрати</button>
        </form>

    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
