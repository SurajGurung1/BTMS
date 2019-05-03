@extends('front-layout')
@section('welcome-content')
    <div class="flex-center position-ref full-height">
        {{-- @if ( Route::has('login') )
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
 
  
                @else
                 <a href="#about">About</a>
  <a href="#contact">Contact</a>
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif --}}
        <div class="topnav">
 
</div>

        <div class="content">
            <div class="title m-b-md">
                @if ( session('Status') ) 
                    <p>{{ session('Status') }}</p>
                @else
                 
    <img src="http://bussewa.com/bussewaUpload/tahalka_1544605139267.png" >
                   
                @endif
            </div>
        </div>
    </div>

@endsection