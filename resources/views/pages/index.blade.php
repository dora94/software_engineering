@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading" align="center">Profile</div>
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

                        @if(count($user)>0)
                            <h1 align="center">Hello, {{$user['firstname']}} {{$user['lastname']}} !</h1>
                            <h1 align="center">Informations:</h1>
                            <p align="center">
                                Your user Id is: {{$user['id']}}
                                <br>
                                Your email is: {{$user['email']}}
                            </p>
                            @else
                            <h1 align="center">Hello, guest !</h1>

                            <p align="center">
                                It appears you are not logged in!
                                Please head to the login page!
                            </p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
