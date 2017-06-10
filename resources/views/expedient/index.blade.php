@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="card-title" style="display: inline;">Your expedients</span>
                    <a href="{{ route('expedients.create') }}" class="btn btn-success pull-right">Add New</a>
                    <form style="display: inline;">
                        <input class="input-lg form-control" type="text" name="search"
                               placeholder="Search for something" value="{{ \Illuminate\Support\Facades\Input::get('search') }}">
                    </form>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        @each('expedient.expedient-list-item', $expedients, 'expedient', 'expedient.expedient-list-empty')
                    </div>
                </div>
                <div class="text-center">{{ $expedients->links() }}</div>
            </div>
        </div>
    </div>
@endsection