<h1>Registrations</h1>
<ul>
@foreach($registrations as $r)
  <li>
    {{ $r->tournament?->name }} - {{ $r->team?->name }} ({{ $r->status }})
  </li>
@endforeach
</ul>