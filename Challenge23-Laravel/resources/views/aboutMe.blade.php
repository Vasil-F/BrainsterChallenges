@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/aboutMe.css') }}">
@endsection

@section('navlink')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('aboutMe') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('blog') }}">Post</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
    </li>
@endsection

@section('hero')
    <h1 class="display-4 mb-3 font-weight-bold">About Me</h1>
    <p class="lead">This is what i do</p>
@endsection

@section('content')
    <div class="container mb-4">
        <div class="w-50 mx-auto mt-5">
            <p class="mt-3 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nam non animi ab, reprehenderit dolore
                aspernatur architecto excepturi. Quidem reiciendis quisquam quasi distinctio voluptas, at autem odio vero
                vitae velit!</p>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut a tempora ad ratione, quae repellat
                iste iure. Suscipit pariatur impedit quasi excepturi labore sunt expedita, quos maiores in aut
                necessitatibus eveniet id quaerat, nesciunt facilis, veniam magni nobis! Deserunt deleniti provident sequi
                rem quam voluptatum id delectus. Nostrum, vitae?</p>
            <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium magni ratione itaque illum modi aliquam
                aliquid blanditiis quas, assumenda pariatur, tenetur illo tempore, vero et. Reprehenderit aliquam, vel
                voluptatem assumenda sed ullam corporis in cumque rem, quas beatae! Doloribus, eligendi!</p>
        </div>
    </div>
@endsection
