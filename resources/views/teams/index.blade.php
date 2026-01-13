<h1>Teams</h1>
<a href="{{ route('teams.create') }}">Create team</a>
<ul>
@foreach($teams as $t)
  <li>{{ $t->name }} @if($t->tag) [{{ $t->tag }}] @endif</li>
@endforeach
</ul>