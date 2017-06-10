@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="card-title">Your cases</span>
                    <a href="./new_case.html" class="btn btn-warning pull-right">Add New</a>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <div class="list-group-item">
                            Arrest of Xie Yang
                            <a href="./open_case.html" class="btn btn-xs btn-info pull-right">Open</a>
                        </div>
                        <div class="list-group-item">
                            Kidnapping of layer Wang Yu
                            <a href="./open_case.html" class="btn btn-xs btn-info pull-right">Open</a>
                        </div>
                        <div class="list-group-item">
                            Torture of Li Heping
                            <a href="./open_case.html" class="btn btn-xs btn-info pull-right">Open</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
