<h1>Create Tournament</h1>
<form method="POST" action="{{ route('tournaments.store') }}">
  @csrf
  <label>Name</label><input name="name">
  <label>Location</label><input name="location">
  <label>Starts</label><input name="starts_at" type="datetime-local">
  <label>Ends</label><input name="ends_at" type="datetime-local">
  <label>Max teams</label><input name="max_teams" type="number" value="16">
  <label>Status</label>
  <select name="status">
    <option>Draft</option><option selected>Open</option><option>Closed</option>
  </select>
  <button type="submit">Save</button>
</form>