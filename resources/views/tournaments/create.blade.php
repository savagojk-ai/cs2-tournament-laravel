<h1>Napravi turnir</h1>
@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('tournaments.store') }}">
  @csrf
  <label>Ime</label><input name="name">
  <label>Lokacija</label><input name="location">
  <label>Kreće</label><input name="starts_at" type="datetime-local">
  <label>Završava se</label><input name="ends_at" type="datetime-local">
  <label>Maksimlani broj timova</label><input name="max_teams" type="number" value="16">
  <label>Status</label><br>
  <select name="status" required>
    <option value="Draft" {{ old('status') === 'Draft' ? 'selected' : '' }}>Draft</option>
    <option value="Open"  {{ old('status', 'Open') === 'Open' ? 'selected' : '' }}>Open</option>
    <option value="Closed" {{ old('status') === 'Closed' ? 'selected' : '' }}>Closed</option>
  </select>
  <button type="submit">Sačuvaj</button>
</form>