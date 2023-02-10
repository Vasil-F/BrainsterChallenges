 @extends('layouts.main')

 @section('css')
     <link rel="stylesheet" href="{{ asset('css/home.css') }}">
 @endsection

 @section('navlink')
     <li class="nav-item active">
         <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
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
     <h1 class="display-4 mb-3 font-weight-bold">Clean Blog</h1>
     <p class="lead">A Blog Theme By Start Bootstrap</p>
 @endsection

 @section('content')
     <div class="container mb-4">
         <div class="w-50 mx-auto mt-5">
             <div class="border-bottom pb-4 mt-3">
                 <h3>Post 1</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, molestias.</p>
                 <span><i>Posted by <b>John Doe</b></i></span>
             </div>
             <div class="border-bottom pb-4  mt-3">
                 <h3>Post 2</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, molestias.</p>
                 <span><i>Posted by <b>John Doe</b></i></span>
             </div>
             <div class="border-bottom pb-4  mt-3">
                 <h3>Post 3</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, molestias.</p>
                 <span><i>Posted by <b>Jane Doe</b></i></span>
             </div>
             <div class="border-bottom pb-4  mt-3">
                 <h3>Post 4</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, molestias.</p>
                 <span><i>Posted by <b>Jane Doe</b></i></span>
             </div>
             <div class="text-right">
                 <button class="btn btn-info my-4">Older posts -></button>
             </div>
         </div>
     </div>
 @endsection
