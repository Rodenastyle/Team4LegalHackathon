@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="card-title">Case Details</span>
                    <a href="{{ route('expedients.index') }}" class="btn btn-success pull-right">Back</a>
                </div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" id="create-new-case-form" onsubmit="event.preventDefault(); return controlledSubmit();">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Defendant</label>
                            <input type="text" class="form-control" id="defendantName" placeholder="Name of the defendant" value="Xie Yang">
                        </div>
                        <div class="form-group">
                            <label for="caseOverview">Overview</label>
                            <textarea id="caseOverview" placeholder="Brief overview of the case" class="form-control" rows="3">Lawer Xie Yand was arested and tortured by the authorities in detention for representing victims of land grabs.
                                </textarea>
                        </div>
                        <hr>
                        <h3>List of Documents</h3>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Document Name</th>
                                <th>Date of upload</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>scan-of-arrest-court-order.jpg</td>
                                <td>16/06/2015</td>
                                <td><a href="" class="btn btn-xs btn-info">View</a></td>
                            </tr>
                            <tr>
                                <td>copy-of-initial-statement.doc</td>
                                <td>16/06/2015</td>
                                <td><a href="" class="btn btn-xs btn-info">View</a></td>
                            </tr>
                            <tr>
                                <td>court-video-transcript.doc</td>
                                <td>19/09/2015</td>
                                <td><a href="" class="btn btn-xs btn-info">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <label for="file-upload">Add documents</label>
                            <div class="panel panel-default file-drop-target">
                                <div class="panel-body text-center">
                                    <h2><i class="fa fa-cloud-upload"></i>Drop files here</h2>
                                </div>
                            </div>
                            <input type="file" id="file-upload" multiple>
                        </div>
                        <input type="submit" class="btn btn-primary pull-right" value="Save Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
