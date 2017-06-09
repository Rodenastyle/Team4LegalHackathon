@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Recent Reports</h1>
                    <ul class="list-group">
                        <li class="list-group-item report alert_orange row">
                            <span class="person col-sm-4">Rob</span>
                            <span class="report-date col-sm-4">16-may-2017</span>
                        </li>
                        <li class="list-group-item report alert_red">Fred</li>
                        <li class="list-group-item report alert_black">James</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
