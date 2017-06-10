<tr>
    <td class="person alert-red"><i class="fa fa-flag" aria-hidden="true"></i> {{ $user->name }}</td>
    <td class="location">Beijing</td>
    <td><a href="{{ route('lawyers.show', $user->id) }}" class="btn btn-xs btn-info pull-right">Details</a></td>
</tr>