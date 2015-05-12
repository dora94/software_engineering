@extends('app')

@section('content')

    <body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
    <!--basic user registering fields-->
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">User</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="user" value="{{ old('user') }}">
							</div>
						</div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">First name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="firstname">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Last name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lastname">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email">
                            </div>

                        </div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>
                    <!--Drop down menu to select type of user-->
                        <div class="form-group" align="center">
                            <div class="col-md-6 col-md-offset-4">
                            <select id="type" name="type" onchange="myFunction()">
                                <option value="Student">Student</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Staff">Staff</option>
                            </select>
                                </div>
                        </div>
                        <!-- Required fields for student-->

                        <div id="student" class="form-group" style="display:none">
                            <label class="col-md-4 control-label">Specializare1</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Specializare1">
                            </div>


                            <label class="col-md-4 control-label">Year of study:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Year1">
                            </div>

                            <label class="col-md-4 control-label">Group1</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Group1">
                            </div>

                            <label class="col-md-4 control-label">Curriculum1</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Curriculum1">
                            </div>

                            <label class="col-md-4 control-label">Adauga</label>
                            <div class="col-md-6">
                                <button onclick="myFunction2()" style="background-color:royalblue;border-color:lightblue" type="button" id="spec2" class="btn btn-primary">
                                    Specializare
                                </button>
                            </div>

                            <div id="student2" class="form-group" style="display:none">
                                <label class="col-md-4 control-label">Specializare2</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Specializare2">
                                </div>


                                <label class="col-md-4 control-label">Year of study:</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Year2">
                                </div>

                                <label class="col-md-4 control-label">Group2</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Group2">
                                </div>

                                <label class="col-md-4 control-label">Curriculum2</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Curriculum2">
                                </div>

                            </div>


                        </div>





                        <!-- Required fields for teacher-->
                        <div id="teacher" class="form-group" style="display:none">
                            <label class="col-md-4 control-label">Department</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Department1">
                            </div>


                            <label class="col-md-4 control-label">Degree</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="degree">
                            </div>

                            <label class="col-md-4 control-label">Chief</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Chief">
                            </div>
                        </div>
                        <!-- Required fields for administrative staff-->
                        <div id="staff" class="form-group" style="display:none">
                            <label class="col-md-4 control-label">Department</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Department2">
                            </div>
                        </div>

						<div class="form-group" align="center">
							<div class="col-md-6 col-md-offset-4">
								<button style="background-color:royalblue;border-color:lightblue" type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>

                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Script for handling the drop down menu-->
    <script>
        function myFunction()
        {
            var x=document.getElementById("type").value;
            if(x=="Student") {
                document.getElementById("teacher").style.display='none';
                document.getElementById("student").style.display = 'block';
                document.getElementById("staff").style.display='none';
            }
            if(x=="Teacher") {
                document.getElementById("teacher").style.display='block';
                document.getElementById("student").style.display= 'none';
                document.getElementById("staff").style.display='none';
                document.getElementById("student2").style.display='none';
            }
            if(x=="Staff")
            {
                document.getElementById("teacher").style.display='none';
                document.getElementById("student").style.display = 'none';
                document.getElementById("staff").style.display='block';
                document.getElementById("student2").style.display='none';

            }
        }

        function myFunction2()
        {if(document.getElementById("student2").style.display=='none')
            document.getElementById("student2").style.display="block";
         else
            document.getElementById("student2").style.display='none';
        }
    </script>

    </body>
@endsection
