<div class="list-group-item">
    {{ $expedient->defendant }}
    <a href="{{ route('expedients.show', $expedient->id) }}" class="btn btn-xs btn-info pull-right">Open</a>
</div>