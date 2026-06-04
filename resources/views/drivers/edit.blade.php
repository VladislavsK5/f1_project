<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('messages.Edit Driver') }}: {{ $driver->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main class="form-section">
        
        <h1>{{ __('messages.Edit Driver') }}: {{ $driver->name }}</h1>

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
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <input type="hidden" name="_method" value="PUT">

            <p>{{ __('messages.Name') }}:</p>
            <input type="text" name="name" value="{{ old('name', $driver->name) }}" required>

            <p>{{ __('messages.Points') }}:</p>
            <input type="number" name="points" value="{{ old('points', $driver->points) }}" required>

            <p>{{ __('messages.Nationality') }}:</p>
            <input type="text" name="nationality" value="{{ old('nationality', $driver->nationality) }}" required>

            <p>{{ __('messages.Team') }}:</p>
            <select name="team_id">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ old('team_id', $driver->team_id) == $team->id ? 'selected' : '' }}>
                        {{ $team->name }}
                    </option>
                @endforeach
            </select>

            <br><br>
            
            <button type="submit">{{ __('messages.Save Changes') }}</button>
            <a href="/" class="btn-table">{{ __('messages.Cancel') }}</a>
        </form>
        
    </main>

</body>
</html>