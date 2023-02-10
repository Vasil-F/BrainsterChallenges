@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

@section('navlink')
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('aboutMe') }}">About</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('blog') }}">Post</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
    </li>
@endsection

@section('hero')
    <div class="w-50 mx-auto text-justify">
        <h2 class="mb-3">Man must explore, and this is exploration at it's greatest</h2>
        <h4>Problems look mighty small from 150 miles up</h4>
        <p class="lead">Posted by Start Bootstrap on August 24, 2018</p>
    </div>
@endsection

@section('content')
    <div class="container mb-4">
        <div class="w-50 mx-auto mt-5">
            <p class="mt-3 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nam non animi ab,
                reprehenderit dolore
                aspernatur architecto excepturi. Quidem reiciendis quisquam quasi distinctio voluptas, at autem odio vero
                vitae velit!
                <br>
                <br>
                <br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate velit nostrum, vel provident adipisci
                possimus, vitae fuga maxime porro eaque natus. Labore cum nesciunt inventore, voluptas eos nemo laborum quae
                reprehenderit ullam dicta natus qui ad? Facere cumque architecto neque explicabo deserunt, alias omnis porro
                eum fuga. Tenetur, rerum ipsum.
                <br>
                <br>
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, architecto quidem voluptates amet vitae velit
                suscipit cum eum perspiciatis aliquid delectus recusandae quaerat provident tenetur necessitatibus pariatur
                dolorem, libero quibusdam.
                <br>
                <br>
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut a tempora ad ratione,
                quae repellat
                iste iure. Suscipit pariatur impedit quasi excepturi labore sunt expedita, quos maiores in aut
                necessitatibus eveniet id quaerat, nesciunt facilis, veniam magni nobis! Deserunt deleniti provident sequi
                rem quam voluptatum id delectus. Nostrum, vitae?
                <br>
                <br>
                <br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium magni ratione itaque
                illum modi aliquam
                aliquid blanditiis quas, assumenda pariatur, tenetur illo tempore, vero et. Reprehenderit aliquam, vel
                voluptatem assumenda sed ullam corporis in cumque rem, quas beatae! Doloribus, eligendi!
            </p>

            <h2 class="mb-3">The final frontier</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut a tempora ad ratione,
                quae repellat
                iste iure. Suscipit pariatur impedit quasi excepturi labore sunt expedita, quos maiores in aut
                necessitatibus eveniet id quaerat, nesciunt facilis, veniam magni nobis! Deserunt deleniti provident sequi
                rem quam voluptatum id delectus. Nostrum, vitae?</p>
            <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium magni ratione itaque
                illum modi aliquam
                aliquid blanditiis quas, assumenda pariatur, tenetur illo tempore, vero et. Reprehenderit aliquam, vel
                voluptatem assumenda sed ullam corporis in cumque rem, quas beatae! Doloribus, eligendi!</p>
            <p class="font-weight-light font-italic mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id culpa
                error sapiente voluptates dolor eveniet ea,
                nisi aperiam autem consectetur perspiciatis distinctio vero quos soluta ipsum odio illo incidunt enim
                accusamus excepturi dolorum? Reprehenderit explicabo quae aut adipisci beatae maiores. Sit maxime dicta
                atque corporis, sunt doloribus voluptatem. Iste itaque sed sequi eum non nam a numquam aspernatur eveniet
                impedit.</p>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut a tempora ad ratione,
                quae repellat
                iste iure. Suscipit pariatur impedit quasi excepturi labore sunt expedita, quos maiores in aut
                necessitatibus eveniet id quaerat, nesciunt facilis, veniam magni nobis! Deserunt deleniti provident sequi
                rem quam voluptatum id delectus. Nostrum, vitae?</p>
            <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium magni ratione itaque
                illum modi aliquam
                aliquid blanditiis quas, assumenda pariatur, tenetur illo tempore, vero et. Reprehenderit aliquam, vel
                voluptatem assumenda sed ullam corporis in cumque rem, quas beatae! Doloribus, eligendi!</p>

            <h2 class="mb-3">Reaching for the stars</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores similique quibusdam ipsam
                doloremque
                cumque alias repudiandae perferendis sit et accusantium voluptates laboriosam ducimus totam deleniti unde
                voluptas, ad iusto vero a pariatur? Expedita vero excepturi sit reiciendis, impedit laboriosam, deserunt
                asperiores quos eos culpa tempora maiores unde eligendi mollitia? Eum.</p>
            <figure class="figure text-center mb-5">
                <img src="{{ asset('img/blog-image.jpg') }}" class="img-fluid" alt="...">
                <figcaption class="figure-caption">Lorem ipsum dolor sit amet consectetur..</figcaption>
            </figure>

            <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium magni ratione itaque
                illum modi aliquam
                aliquid blanditiis quas, assumenda pariatur, tenetur illo tempore, vero et. Reprehenderit aliquam, vel
                voluptatem assumenda sed ullam corporis in cumque rem, quas beatae! Doloribus, eligendi!</p>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id culpa
                error sapiente voluptates dolor eveniet ea,
                nisi aperiam autem consectetur perspiciatis distinctio vero quos soluta ipsum odio illo incidunt enim
                accusamus excepturi dolorum? Reprehenderit explicabo quae aut adipisci beatae maiores. Sit maxime dicta
                atque corporis, sunt doloribus voluptatem. Iste itaque sed sequi eum non nam a numquam aspernatur eveniet
                impedit.</p>
            <p class="mb-5">Lorem ipsum dolor <u>sit amet</u> consectetur adipisicing elit. Ipsa, <u>perferendis sequi
                </u> eum non nam.</p>

        </div>
    </div>
@endsection
