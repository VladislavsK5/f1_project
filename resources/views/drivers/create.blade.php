<form action="/drivers" method="POST">
    @csrf <input type="text" name="name" placeholder="Driver Name" required>
    <input type="text" name="nationality" placeholder="Nationality" required>
    <input type="number" name="number" placeholder="Car Number" required>
    <input type="number" name="points" placeholder="Points" required>
    
    <select name="team_id">
        @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
        @endforeach
    </select>

    <button type="submit">Add Driver</button>
</form>