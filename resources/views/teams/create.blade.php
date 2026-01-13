<h1>Napravi tim</h1>
<form method="POST" action="{{ route('teams.store') }}">
  @csrf
  <label>Ime</label><input name="name">
  <label>Tag</label><input name="tag">
  <button type="submit">Sačuvaj</button>
</form>