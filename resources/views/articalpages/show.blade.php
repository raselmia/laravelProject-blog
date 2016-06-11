@extends('layouts.mastertwo')  

@section('title', ' Conception World')
   


@section('content')

<div id="wrapper">

     @include('Partials.navbar')
     
        <div id="page-wrapper">

            <div class="container-fluid">

            <h1>Artical Details</h1>

            <h2>{{ $artical->title }}</h2>

            <h3>{{ $artical->category }}</h3>
            <h3>{{ $artical->user->name }}</h3>

            <p>{{ $artical->blog }}</p>

            </div>

            </div>

@stop()