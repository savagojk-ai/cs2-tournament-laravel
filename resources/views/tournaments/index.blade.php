<!DOCTYPE html>
<html>
<head>
    <title>CS2 Turniri</title>
</head>
<body>
    <h1>Counter-Strike 2 Turniri</h1>

    <ul>
        @forelse ($tournaments as $t)
            <li>
                <strong>{{ $t->name }}</strong>
                - {{ $t->status }}
                ({{ $t->starts_at }} → {{ $t->ends_at }})
            </li>
        @empty
            <li>Nema turnira u bazi.</li>
        @endforelse
    </ul>
</body>
</html>