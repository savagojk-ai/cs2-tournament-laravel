<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Igrači</title>
</head>
<body>
    <h1>Igrači</h1>

    <p><a href="{{ route('players.create') }}">Napravi igrača</a></p>

    <ul>
        @forelse ($players as $p)
            <li>
                <strong>{{ $p->nickname }}</strong>
                ({{ $p->role }})
                - Tim: {{ $p->team?->name ?? 'N/A' }}
            </li>
        @empty
            <li>Nijedan igrač nije pronađen.</li>
        @endforelse
    </ul>
</body>
</html>