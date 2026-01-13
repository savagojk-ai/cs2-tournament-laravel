<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Napravi igrača</title>
</head>
<body>
    <h1>Napravi igrača</h1>

    <form method="POST" action="{{ route('players.store') }}">
        @csrf

        <div>
            <label>Nickname</label>
            <input name="nickname" value="{{ old('nickname') }}">
            @error('nickname') <div>{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Steam ID</label>
            <input name="steam_id" value="{{ old('steam_id') }}">
            @error('steam_id') <div>{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Rola</label>
            <select name="role">
                @foreach (['IGL','AWPer','Rifler','Support','Entry'] as $role)
                    <option value="{{ $role }}" @selected(old('role') === $role)>{{ $role }}</option>
                @endforeach
            </select>
            @error('role') <div>{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Tim</label>
            <select name="team_id">
                @foreach ($teams as $t)
                    <option value="{{ $t->id }}" @selected(old('team_id') == $t->id)>{{ $t->name }}</option>
                @endforeach
            </select>
            @error('team_id') <div>{{ $message }}</div> @enderror
        </div>

        <button type="submit">Sačuvaj</button>
    </form>

    <p><a href="{{ route('players.index') }}">Nazad</a></p>
</body>
</html>