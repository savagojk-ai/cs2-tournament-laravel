<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Players</title>
</head>
<body>
    <h1>Players</h1>

    <p><a href="{{ route('players.create') }}">Create player</a></p>

    <ul>
        @forelse ($players as $p)
            <li>
                <strong>{{ $p->nickname }}</strong>
                ({{ $p->role }})
                - Team: {{ $p->team?->name ?? 'N/A' }}
            </li>
        @empty
            <li>No players found.</li>
        @endforelse
    </ul>
</body>
</html>