@extends('app')

@section('content')
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading" align="center" style="font-size:large"><strong>Welcome!</strong></div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
    </div>
                    <div align="center">
                        <img src="http://i304.photobucket.com/albums/nn194/Elena_Dora_Husaru/cover_zpsspdsd3m4.jpg" alt="Cover Img" style="width:682px;height:306px">
                    </div>
                    <p align="center">
                        Hello!
                        Welcome to the web application for managing academic information.<br>
                        If you're a teacher, part of the administrative staff or<br>
                        a student please login and check your information.<br>
                        For login use the given credentials!

                    </p>

                    </div>
                </div>
            </div>
        </div>
</body>
    @stop