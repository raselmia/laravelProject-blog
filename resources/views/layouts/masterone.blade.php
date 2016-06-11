<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link href="{!! asset('dist/css/newcss.css') !!} " rel="stylesheet" type="text/css"/>
      
    </head>
    
    <body>

    @include('Partials.header')


	<!-- Main Content -->
	@yield('content')



	

	@include('Partials.footer')



        <script src="{!! asset('dist/js/jquery-2.1.3.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dist/js/bootstrap.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dist/js/bootstrap.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dist/js/npm.js') !!}" type="text/javascript"></script>
    

    </body>
</html>