@extends('pages.teacher')

@section('content2')
    <body>
    <style>
        #mycourses {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            width: 90%;
            border-collapse: collapse;
        }

        #mycourses td, #mycourses th {
            font-size: 1em;
            border: 1px solid #000000;
            padding: 3px 7px 2px 7px;
        }

        #mycourses th {
            font-size: 1.1em;
            text-align: center;
            padding-top: 5px;
            padding-bottom: 4px;
            background-color: #282828  ;
            color: lightgray;
        }
    </style>
        <div class="container-fluid" align="center">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2" >
                <div class="panel panel-info" >
                    <div class="panel-heading">Courses list</div>
                    <div class="panel-body" >
                        <table id="mycourses">

                            <tr>
                                <th>Discipline id</th>
                                <th>Discipline Name</th>
                                <th>Specialization</th>
                                <th>Semester</th>
                                <th>Mandatory</th>
                            </tr>
                            <!--here goes a foreach to display all courses-->
                            @foreach($courses as $val)
                                <tr>
                                    <td>{{$val->disc_id}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->specname}}</td>
                                    <td>{{$val->semester}}</td>
                                    <td>{{$val->mandatory}}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

@stop