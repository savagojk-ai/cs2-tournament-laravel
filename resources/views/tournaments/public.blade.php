<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CS2 Turniri (Public)</title>
</head>
<body>
<h1>CS2 Turniri (Public)</h1>

@auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endauth

@guest
    <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
@endguest

@if (session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

@guest
    <p><strong>Napomena:</strong> Moraš biti ulogovan da bi prijavio tim ili otkazao prijavu.</p>
@endguest

@foreach ($tournaments as $t)
    <hr>
    <h2>{{ $t->name }} ({{ $t->status }})</h2>
    <p>Najveci broj timova: {{ $t->max_teams }}</p>

    @auth
        <form method="POST" action="{{ route('tournaments.register', $t->id) }}">
            @csrf

            <label>Izaberi tim:</label>
            <select name="team_id" required>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>

            <button type="submit">Registruj tim.</button>
        </form>

        <form method="POST" action="{{ route('tournaments.unregister', $t->id) }}" style="margin-top: 8px;">
            @csrf
            @method('DELETE')
            <button type="submit">Prekini moju registraciju</button>
        </form>
    @endauth

    <h3>Registrovani timovi:</h3>
    <ul>
        @forelse ($t->registrations as $r)
            <li>{{ $r->team?->name }} ({{ $r->status }})</li>
        @empty
            <li>Nema registrovanih timova.</li>
        @endforelse
    </ul>
@endforeach

</body>
</html>