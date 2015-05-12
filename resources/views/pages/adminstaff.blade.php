@extends('app')

@section('content')
    <body>

    <div id="nav">
        <ul class="nav nav-pills nav-stacked nav-info">

            <li role="presentation" ><a href="{{ url('/adminstaff') }}">Statistics</a></li>
            <li role="presentation" ><a href="{{ url('/adminstaff') }}">Students</a></li>
            <li role="presentation" ><a href="{{ url('/adminstaff') }}">Register</a></li>
        </ul>

    </div>

    @yield('content2')
    </body>
    <style>
        #nav {
            border-radius: 15px;
            line-height:30px;
            background-color:lightblue;
            height:168px;
            width:150px;
            float:left;
            padding:5px;
        }</style>
@stop
