@extends('app')

@section('content')
    <body>

    <div id="nav">
        <ul class="nav nav-pills nav-stacked nav-info">

            <li role="presentation" ><a href="{{ url('/teacher/courses') }}">Courses</a></li>
            <li role="presentation" ><a href="{{ url('/teacher/students') }}">Students</a></li>
            <li role="presentation" ><a href="{{ url('/teacher') }}">Grades</a></li>
            <li role="presentation" ><a href="{{ url('/teacher/addoptional') }}">Optionals</a></li>
        </ul>

    </div>

    @yield('content2')
    </body>
    <style>
        #nav {
            border-radius: 15px;
            line-height:30px;
            background-color:lightblue;
            height:216px;
            width:150px;
            float:left;
            padding:5px;
        }</style>
@stop
