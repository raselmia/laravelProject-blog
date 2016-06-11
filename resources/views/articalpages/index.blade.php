@extends('layouts.mastertwo')  

@section('title', ' Conception World')
   


@section('content')

<div id="wrapper">

     @include('Partials.navbar')
     
        <div id="page-wrapper">

            <div class="container-fluid">

            <h1>Artical List</h1>

            <table class="table table-hover">
            	<thead>
            		<tr>
            			<td>Title</td>
            			<td>Author</td>
            			<td>Category</td>
            			<td>Description</td>
            			<td>Action</td>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach( $artical as $row )
            		<tr>
            			<td>{{ $row->title }}</td>
            			<td>{{ $row->user->name }}</td>
            			<td>{{ $row->category }}</td>
            			<td>{{ $row->blog}}</td>
            			<td><a href="{{ url('/articals', $row->id)}} ">View</a>
                            <a href="{{ url('/articals/'. $row->id. '/edit')}} ">edit</a>
                        </td>
            		</tr>
            		@endforeach
            	</tbody>

            </table>
            </div>
        </div>

    </div>

@stop()