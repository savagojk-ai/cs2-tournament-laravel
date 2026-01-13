<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrations</title>
</head>
<body>

<h1>Registrovani timovi</h1>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>#</th>
            <th>Turniri</th>
            <th>Timovi</th>
            <th>Status</th>
            <th>Napravljeno:</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($registrations as $r)
            <tr>
                <td>{{ $r->id }}</td>
                <td>{{ $r->tournament?->name }}</td>
                <td>{{ $r->team?->name }}</td>
                <td>{{ $r->status }}</td>
                <td>{{ $r->created_at }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nema registracija trenutno.</td>
            </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>