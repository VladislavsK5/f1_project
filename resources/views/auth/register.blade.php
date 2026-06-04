<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('messages.Register')}}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main class="form-section">
        
        <h1>{{ __('messages.Create Account') ?? 'Create Account' }}</h1>
                
        @if ($errors->any())
            <div class="form-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <p>{{ __('messages.Name') ?? 'Name' }}:</p>
            <input type="text" name="name" value="{{ old('name') }}" required>

            <p>Email:</p>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <p>{{ __('messages.Password') ?? 'Password' }}:</p>
            <input type="password" name="password" required>

            <p>{{ __('messages.Confirm Password') ?? 'Confirm Password' }}:</p>
            <input type="password" name="password_confirmation" required>

            <br><br>
                        
            <button type="submit">{{ __('messages.Register') ?? 'Register' }}</button>
            <a href="/" class="btn-table">{{ __('messages.Cancel') ?? 'Cancel' }}</a>
        </form>
    </main>
</body>
</html>