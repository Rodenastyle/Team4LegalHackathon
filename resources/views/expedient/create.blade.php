@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="card-title">New Expedient Details</span>
                    <a href="{{ route('expedients.index') }}" class="btn btn-success pull-right">Back</a>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('expedients.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Defendant</label>
                            <input name="defendant" type="text" class="form-control" id="defendantName" placeholder="Name of the defendant">
                        </div>
                        <div class="form-group">
                            <label for="caseOverview">Overview</label>
                            <textarea name="overview" id="caseOverview" placeholder="Brief overview of the case" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file-upload">Add documents</label>
                            <input name="resource" type="file">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Save Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
