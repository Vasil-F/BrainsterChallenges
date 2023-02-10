@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{ asset("css/contact.css") }}">
@endsection

@section('navlink')
<li class="nav-item ">
    <a class="nav-link" href="{{ route('home') }}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('aboutMe') }}">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('blog') }}">Post</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
  </li>
@endsection

@section('hero')
<h1 class="display-4 mb-3 font-weight-bold">Contact Me</h1>
<p class="lead">Have questions? I have answers!</p>
@endsection

@section('content')

<div class="container mb-4">
  <div class="w-50 mx-auto">
    <form class="mt-5">
      <div class="form-group">
        <input type="text" class="form-control border-top-0 border-left-0 border-right-0"  placeholder="Name">
      </div>
      <div class="form-group">
        <input type="email" class="form-control border-top-0 border-left-0 border-right-0 my-4"  placeholder="Email Address">
      </div>
      <div class="form-group">
        <input type="number" class="form-control border-top-0 border-left-0 border-right-0 my-4"  placeholder="Phone Number">
      </div>
      <div class="form-group">
        <textarea class="form-control border-top-0 border-left-0 border-right-0 my-4" name="message" id="message" placeholder="Message" cols="72" rows="7"></textarea>
      </div>
     
      <button type="submit" class="btn btn-info mb-3">Send</button>
    </form>
  </div>
</div>

@endsection