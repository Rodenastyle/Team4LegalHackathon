@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="card-title">Expedient Details</span>
                    <a href="{{ route('expedients.index') }}" class="btn btn-success pull-right">Back</a>
                </div>
                <div class="panel-body">
                    <form action="{{ route('expedients.update', $expedient->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Defendant</label>
                            <input name="defendant" type="text" class="form-control" id="defendantName" placeholder="Name of the defendant" value="{{ $expedient->defendant }}">
                        </div>
                        <div class="form-group">
                        <label for="caseOverview">Overview</label>
                            <textarea name="overview" id="caseOverview" placeholder="Brief overview of the case" class="form-control" rows="3">{{ $expedient->overview }}</textarea>
                        </div>
                        <div class="form-group">
                        <input name="resource" type="file" id="file-upload">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right"> Save Update </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
