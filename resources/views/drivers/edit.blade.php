<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Driver: {{ $driver->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main class="form-section">
        
        <h2>Edit Driver: {{ $driver->name }}</h2>

        @if ($errors->any())
            <div class="form-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/drivers/{{ $driver->id }}" method="POST" novalidate>
            @csrf
            @method('PUT')

            <p>Name:</p>
            <input type="text" name="name" value="{{ old('name', $driver->name) }}" required>

            <p>Points:</p>
            <input type="number" name="points" value="{{ old('points', $driver->points) }}" required>

            <p>Nationality:</p>
            <input type="text" name="nationality" value="{{ old('nationality', $driver->nationality) }}" required>

            <p>Team:</p>
            <select name="team_id" required>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ old('team_id', $driver->team_id) == $team->id ? 'selected' : '' }}>
                        {{ $team->name }}
                    </option>
                @endforeach
            </select>

            <br><br>
            
            <button type="submit">Save Changes</button>
            <a href="/" class="btn-table">Cancel</a>
        </form>
        
    </main>

</body>
</html>