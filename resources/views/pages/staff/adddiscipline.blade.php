@extends('pages.adminstaff')

@section('content2')
<body>
<div class="container-fluid" align="center">
    <div class="row" >
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-info" >
                <div class="panel-heading">Add new </div>
                <div class="panel-body" >
                    <!--What's supposed to go here?????-->
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/adminstaff/discipline') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!--Discipline name variable is "dname"-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="dname">
                            </div>
                        </div>
                        <!--Discipline description variable name is "description"-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="description">
                            </div>

                        </div>
                        <!--Optional discipline semester variable name is "semester"-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Semester</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="semester">
                            </div>

                        </div>
                        <!--Specialization where the discipline is studied is "spec"-->
                        <!--Idea=allow to add it to multiple specializations-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Specialization</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="spec">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Credits</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="credit">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Teacher</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="teacher">
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
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@stop