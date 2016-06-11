@extends('layouts.mastertwo')  

@section('title', ' Conception World')
   


@section('content')

<div id="wrapper">

     @include('Partials.navbar')
     
        <div id="page-wrapper">

            <div class="container-fluid">

            <h1>Your Profile</h1>

            <div>
               <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    @if( $view == null)

                    <p>Please update your Profilre</p>        
                    <li style="margin: 30px;">
                        <a href="{{ url('/profile/create') }} " class="btn btn-primary"> Create Profile</a>
                    </li>
                     @else
                     <p>Wellcome {{ Auth::user()->name }}</p>
                     @endif
                    <li style="margin: 30px;">
                        <a href="{{ url('/profile/edit') }} " class="btn btn-primary" > Edit Profile</a>
                    </li>

                </ul>
                </div> 


            </div>
            
            <div>
                
                <h1>{{ dd($view) }}</h1>
                
            </div>

            
            </div>
        </div>

    </div>

@stop()