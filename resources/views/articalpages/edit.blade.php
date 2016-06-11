@extends('layouts.mastertwo')  

@section('title', ' Conception World')
   


@section('content')

<div id="wrapper">

     @include('Partials.navbar')
     
        <div id="page-wrapper">

            <div class="container-fluid">

            


<div class="container-fluid">

<div class="col-md-8">

    <h1>Edit actical Here</h1>

    <!-- {!! Form::open(array('route' => 'articals.store', 'class' => 'form' )) !!} -->

    <!-- {!! Form::hidden('user_id', Auth::user()->id ) !!} -->
   
        {!! Form::model($editArticle, ['method'=>'PATCH','route' => ['articals.update',$editArticle->id]]) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control','required','autofocus']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category', 'category') !!}
                {!! Form::text('category', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('blog', 'Artical') !!}
                {!! Form::textarea('blog', null, ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
            {!! Form::reset('Reset', array('class'=>'btn btn-warning')) !!}

        {!! Form::close() !!}



</div>

</div>


            </div>
        </div>

    </div>

@stop()