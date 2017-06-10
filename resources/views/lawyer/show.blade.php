@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="card-title person alert-red">Xie Yang - Current threat level <i class="fa fa-flag"></i></span>
                    <a href="./lawyers.html" class="btn btn-success pull-right">Back</a>
                </div>
                <div class="panel-body">
                    <div class="lawyer-data">
                        <div class="form-group">
                            <label for="caseOverview">Last known location</label>
                            <input type="text" class="form-control" id="layerlocation" placeholder="Last known location" value="Beijing">
                        </div>
                        <hr>
                        <button class="btn btn-success btn-lg pull-left" data-toggle="modal" data-target="#myModalDown">Reduce threat level</button>
                        <button class="btn btn-danger btn-lg pull-right" data-toggle="modal" data-target="#myModalUp">Raise threat level</button>
                        <!-- Modal Down -->
                        <div class="modal fade" id="myModalDown" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Be advised!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Reducing threat level for this person will result in removal of his cases from shared pool. You will be required to reassign cases back to him/her from the shared pool and/or other lawyers currently working on them.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success">Reduce Level</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Modal Up -->
                        <div class="modal fade" id="myModalUp" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Be advised!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Raising threat level for this person will result in release of his cases into shared pool. You will be required to assign those cases to available lawers or archive them.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger">Raise Level</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection