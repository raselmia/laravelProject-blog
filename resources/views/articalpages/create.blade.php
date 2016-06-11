@extends('layouts.mastertwo')  

@section('title', ' Conception World')
   


@section('content')

<div id="wrapper">

     @include('Partials.navbar')
     
        <div id="page-wrapper">

            <div class="container-fluid">

            


<div class="container-fluid">

<div class="col-md-8">

    <h1>Add actical Here</h1>

    {!! Form::open(array('route' => 'articals.store', 'class' => 'form')) !!}

    {!! Form::hidden('user_id', Auth::user()->id ) !!}
   

    <div class="form-group">
        {!! Form::label('Title') !!}
        {!! Form::text('title', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Artical Title')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Artical category Here') !!}
        {!! Form::text('category', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your Artical Category')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Artical Details Here') !!}
        {!! Form::textarea('blog', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your Artical Description')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save Artical',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
</div>

</div>


            </div>
        </div>

    </div>

@stop()