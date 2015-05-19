@extends('pages.student')

@section('content2')
    <body>
    <style>
        #mygrades {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            width: 90%;
            border-collapse: collapse;
        }

        #mygrades td, #mygrades th {
            font-size: 1em;
            border: 1px solid #000000;
            padding: 3px 7px 2px 7px;
        }

        #mygrades th {
            font-size: 1.1em;
            text-align: center;
            padding-top: 5px;
            padding-bottom: 4px;
            background-color: #282828  ;
            color: lightgray;
        }

        #mygrades2 {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            width: 90%;
            border-collapse: collapse;
        }

        #mygrades2 td, #mygrades th {
            font-size: 1em;
            border: 1px solid #000000;
            padding: 3px 7px 2px 7px;
        }

        #mygrades2 th {
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
                    <div class="panel-heading">Students list</div>
                    <div class="panel-body" >
                            <table id="mygrades">
                                <tr>
                                    <th colspan="4">Specialization 1</th>
                                </tr>
                                <tr>
                                    <th>Discipline id</th>
                                    <th>Discipline Name</th>
                                    <th>Grade</th>
                                    <th>Semester</th>
                                </tr>

                                @foreach($grades as $val)
                                <tr>
                                    <td>{{$val->id}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->grade}}</td>
                                    <td>{{$val->semester}}</td>

                                </tr>
                                @endforeach
                            </table>



                            <h1>   </h1>
                            <h1>   </h1>
                            <h1>   </h1>
                            <h1>   </h1>
                     @if(count($grades2))

                            <table id="mygrades2">
                                <tr>
                                    <th colspan="4">Specialization 2</th>
                                </tr>
                                <tr>
                                    <th>Discipline id</th>
                                    <th>Discipline Name</th>
                                    <th>Grade</th>
                                    <th>Semester</th>
                                </tr>

                                @foreach($grades2 as $val2)
                                    <tr>
                                        <td>{{$val2->id}}</td>
                                        <td>{{$val2->name}}</td>
                                        <td>{{$val2->grade}}</td>
                                        <td>{{$val2->semester}}</td>

                                    </tr>
                                @endforeach
                            </table>
                     @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop