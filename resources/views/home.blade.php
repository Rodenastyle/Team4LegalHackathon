@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>Recent Reports</h1>
                    <ul class="list-group">
                        <li class="list-group-item disabled row">
                            <span class="person col-sm-4">Name</span>
                            <span class="location col-sm-3">Location</span>
                            <span class="report-date col-sm-2">Report Date</span>
                            <span class="col-sm-2">Alert Type</span>
                        </li>
                        <li class="list-group-item report alert_orange row">
                            <span class="person col-sm-4">Samer</span>
                            <span class="location col-sm-3">Beirut, Lebanon</span>
                            <span class="report-date col-sm-2">12-dec-2016</span>
                            <span class="flag col-sm-1"></span>
                            <span class="col-sm-2"><span class="glyphicon glyphicon-plus-sign"></span>Details</span>
                        </li>
                        <li class="list-group-item report alert_red row">
                            <span class="person col-sm-4">Ozden</span>
                            <span class="location col-sm-3">Ankara, Turkey</span>
                            <span class="report-date col-sm-2">16-may-2017</span>
                            <span class="flag col-sm-1"></span>
                            <span class="col-sm-2"><span class="glyphicon glyphicon-plus-sign"></span>Details</span>
                        </li>
                        <li class="list-group-item report alert_black row">
                            <span class="person col-sm-4">Johar</span>
                            <span class="location col-sm-3">Grozny, Russia</span>
                            <span class="report-date col-sm-2">03-June-2017</span>
                            <span class="flag col-sm-1"></span>
                            <span class="col-sm-2"><span class="glyphicon glyphicon-plus-sign"></span>Details</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
