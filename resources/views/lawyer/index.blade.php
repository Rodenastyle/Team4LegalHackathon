@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="card-title">Active Lawers</span>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('lawyer.lawyer-list-item', $users, 'user', 'lawyer.lawyer-list-empty')
                        <tr>
                            <td class="person alert-yellow"><i class="fa fa-flag" aria-hidden="true"></i> Wang Yu</td>
                            <td class="location">Haixi</td>
                            <td><a href="./lawyer_data.html" class="btn btn-xs btn-info pull-right">Details</a></td>
                        </tr>
                        <tr>
                            <td class="person"><i class="fa fa-flag" aria-hidden="true"></i> Li Heping</td>
                            <td class="location">Chengdu</td>
                            <td><a href="./lawyer_data.html" class="btn btn-xs btn-info pull-right">Details</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection