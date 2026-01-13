<h1>Timovi</h1>
<a href="{{ route('teams.create') }}">Napravi tim</a>
<ul>
@foreach($teams as $t)
  <li>{{ $t->name }} @if($t->tag) [{{ $t->tag }}] @endif</li>
@endforeach
</ul>