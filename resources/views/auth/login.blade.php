<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('messages.Sign In') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main class="form-section">
        
        <h1>{{ __('messages.Sign In') }}</h1>

        @if ($errors->any())
            <div class="form-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <p>Email:</p>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <p>{{ __('messages.Password') }}:</p>
            <input type="password" name="password" required>

            <br><br>
            
            <button type="submit">{{ __('messages.Login') }}</button>
            <a href="/" class="btn-table">{{ __('messages.Cancel') }}</a>
        </form>
        
    </main>

</body>
</html>