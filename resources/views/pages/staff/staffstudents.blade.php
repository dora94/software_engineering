@extends('pages.adminstaff')

    @section('content2')

        <body>
        <div class="container-fluid" align="center">
            <div class="row" >
                <div class="col-md-8 col-md-offset-2" >
                    <div class="panel panel-info" >
                        <div class="panel-heading">Students list</div>
                        <div class="panel-body" >
                            <!--to modify action -->
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/adminstaff/students') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="sname">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Specialization</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="specialization">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Year</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="year">
                                    </div>

                                </div>
                                <!--Specialization where the discipline is studied is "spec"-->
                                <!--Idea=allow to add it to multiple specializations-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Group</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="group">
                                    </div>

                                </div>
                                <div class="form-group" align="center">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button style="background-color:royalblue;border-color:lightblue" type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>


                <table id="mystudents">
                    <tr>
                        <th colspan="10">Students List</th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Specialization 1</th>
                        <th>Year 1</th>
                        <th>Group 1</th>
                        <th>Specialization 2</th>
                        <th>Year 2</th>
                        <th>Group 2</th>
                    </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <style>

                #mystudents {
                    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                    width: 90%;
                    border-collapse: collapse;
                }

                #mystudents td, #mystudents th {
                    font-size: 1em;
                    border: 1px solid #000000;
                    padding: 3px 7px 2px 7px;
                }

                #mystudents th {
                    font-size: 1.1em;
                    text-align: center;
                    padding-top: 5px;
                    padding-bottom: 4px;
                    background-color: #282828  ;
                    color: lightgray;
                }
            </style>
        </body>
    @stop