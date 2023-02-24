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
        <p class="block text-2xl bg-gray-800 text-white text-center p-6">Измени постоечки производ</p>
        <a class="border rounded p-6 text-center bg-orange-200 text-dark hover:bg-orange-400"
            href="{{ route('projects.create') }}">Додај</a>
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
    <div
        class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 grid-flow-row place-items-center box-border lg:px-10 md:px-8 px-4  pt-7 pb-7">

        @foreach ($projects as $project)
            <div
                class="card col-span-1 max-w-sm bg-white box-border border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-6 my-8">
                <div class="card-inside" data-id="{{ $project->id }}">
                    <img class="rounded-t-lg w-full lg:h-44 xl:h-60 h-60" src="{{ $project->image }}" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $project->name }}
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
                    <div class="action-btns mx-auto w-full mb-4 text-center hidden">
                        <button
                            class="edit-btn inline-block mx-2 text-dark hover:text-white bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-md px-5 py-2.5 text-center dark:bg-gray-400  dark:hover:bg-gray-300 dark:focus:ring-gray-200"
                            data-id="{{ $project->id }}">Измени</button>
                       
                        <button data-id="{{ $project->id }}"
                            class="delete-btn inline-block mx-2 text-dark hover:text-white bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-md px-5 py-2.5 text-center dark:bg-gray-400  dark:hover:bg-gray-300 dark:focus:ring-gray-200"
                           >Избриши</button>
                    </div>
                </div>
               
                <div data-id="{{ $project->id }}" 
                    class="modal-div hidden fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                    <div class="relative lg:w-1/3 md:w-1/2 lg:h-1/3 md:h-1/2 mx-auto my-auto">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" data-id="{{ $project->id }}"
                                class="hide-modal-btn absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-hide="popup-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">
                                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Дали сте сигурни дека
                                    сакате да го избришете производот?</h3>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    @csrf
                                    @method('DELETE')
                                    <button data-modal-hide="popup-modal" type="submit" 
                                        class="">
                                        Избриши
                                    </button>
                                </form>
                                <button data-modal-hide="popup-modal" type="button" data-id="{{ $project->id }}"
                                    class="hide-modal-btn text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2 hover:text-gray-900 focus:z-10 dark:bg-gray-500 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Откажи</button>
                            </div>
                        </div>
                    </div>
                </div>


                <form action="{{ route('projects.update', $project) }}" method="POST"
                    class="card-form block w-full p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 "
                    data-id="{{ $project->id }}" style="display:none; width:350px;">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        <label for="image"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Слика</label>
                        <input type="text" name="image" value="{{ $project->image }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Image URL">
                    </div>
                    <div class="mb-6">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Име</label>
                        <input type="text" name="name" value="{{ $project->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Name">
                    </div>
                    <div class="mb-6">
                        <label for="subtitle"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Поднаслов</label>
                        <input type="text" name="subtitle" value="{{ $project->subtitle }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Subtitle">
                    </div>
                    <div class="mb-6">
                        <label for="desc"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Опис</label>
                        <input type="text" name="desc" value="{{ $project->desc }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Image URL">
                    </div>
                    <div class="mb-6">
                        <label for="link"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Линк</label>
                        <input type="text" name="link" value="{{ $project->link }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Image URL">
                    </div>


                    <button type="submit" data-id="{{ $project->id }}" value="{{ $project->id }}"
                        class="text-white inline-block bg-blue-700 my-3 mr-2 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Зачувај</button>

                    <button type="button" data-id="{{ $project->id }}"
                        class="cancel-btn inline-block text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2 hover:text-gray-900 focus:z-10 dark:bg-gray-500 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Откажи</button>
                </form>



            </div>
        @endforeach
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
