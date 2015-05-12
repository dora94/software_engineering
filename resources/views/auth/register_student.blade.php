@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
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

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">User</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="user" value="{{ old('user') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="email">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Specialization 1</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="spec1">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Specialization 2</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="spec2">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Semester</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="semester">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Grant</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="grant">
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

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button style="background-color:darkred;border-color:indianred" type="submit" class="btn btn-primary">
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
@endsection
