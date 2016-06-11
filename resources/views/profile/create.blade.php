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

    {!! Form::open(array('route' => 'profile.store', 'class' => 'form')) !!}

    {!! Form::hidden('user_id', Auth::user()->id ) !!}
   

    <div class="form-group">
        {!! Form::label('First Name') !!}
        {!! Form::text('first_name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'First Name')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Last Name') !!}
        {!! Form::text('last_name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Last Name')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Profession') !!}
        {!! Form::text('profession', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your Profession')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Address Here') !!}
        {!! Form::text('address', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your Address')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Mobile Number') !!}
        {!! Form::text('mobile', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Mobile Number')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Phone Number') !!}
        {!! Form::text('phone', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Phone Number')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save Profile',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
</div>

</div>


            </div>
        </div>

    </div>

@stop()