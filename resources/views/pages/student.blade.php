@extends('app')

@section('content')
    <body>

        <div id="nav">
                        <ul class="nav nav-pills nav-stacked nav-info">

                            <li role="presentation" ><a href="{{ url('/student/grades') }}">Grades</a></li>
                            <li role="presentation" ><a href="{{ url('/student') }}">Contract</a></li>
                            <li role="presentation" ><a href="{{ url('/student') }}">Optionals</a></li>
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
