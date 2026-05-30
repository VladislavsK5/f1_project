<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('messages.Add New Driver') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main class="form-section">
        
        <h2>{{ __('messages.Add New Driver') }}</h2>

        @if ($errors->any())
            <div class="form-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/drivers" method="POST" novalidate>
            @csrf

            <p>{{ __('messages.Name') }}:</p>
            <input type="text" name="name" value="{{ old('name') }}" required>

            <p>{{ __('messages.Points') }}:</p>
            <input type="number" name="points" value="{{ old('points', 0) }}" required>

            <p>{{ __('messages.Nationality') }}:</p>
            <input type="text" name="nationality" value="{{ old('nationality') }}" required>

            <p>{{ __('messages.Team') }}:</p>
            <select name="team_id" required>
                <option value="">{{ __('messages.Select Team') }}</option>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ old('team_id') == $team->id ? 'selected' : '' }}>
                        {{ $team->name }}
                    </option>
                @endforeach
            </select>

            <br><br>
            
            <button type="submit">{{ __('messages.Create Driver') }}</button>
            <a href="/" class="btn-table">{{ __('messages.Cancel') }}</a>
        </form>
        
    </main>

</body>
</html>