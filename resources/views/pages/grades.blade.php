@extends('pages.student')

@section('content2')

                    <div id="mydata" align="center">

                        <table id="mygrades"  border="1" cellpadding="2">
                            <tr>
                                <td>&nbsp;</td>
                                <td><b>Semester</b></td>
                                <td><b>Discipline id</b></td>
                                <td><b>Discipline</b></td>
                                <td><b>Grade</b></td>
                                <td><b>Credits</b></td>
                            </tr>
                        </table>

                    </div>

                    <style>
                        #mydata {
                            border-radius: 15px;
                            line-height:30px;
                            background-color:lightblue;
                            height:200px;
                            width:400px;
                            margin-left: auto ;
                            margin-right: auto ;
                            padding:5px;
                        }
                    </style>

    @stop
