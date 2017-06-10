@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="card-title">Welcome</span>
                </div>
                @if( ! @Auth::user()->admin)
                    <div class="panel-body text-center">
                        <h1>Please indicate your present threat level</h1>
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default"><i class="fa fa-flag alert-green" aria-hidden="true"></i> I'm safe for now</button>
                            <button type="button" checked class="btn btn-default"><i class="fa fa-flag alert-yellow" aria-hidden="true"></i> I expect trouble</button>
                            <button type="button" class="btn btn-default"><i class="fa fa-flag alert-red" aria-hidden="true"></i> I need urgent help</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
