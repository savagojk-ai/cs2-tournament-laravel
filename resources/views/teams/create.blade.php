<h1>Create Team</h1>
<form method="POST" action="{{ route('teams.store') }}">
  @csrf
  <label>Name</label><input name="name">
  <label>Tag</label><input name="tag">
  <button type="submit">Save</button>
</form>