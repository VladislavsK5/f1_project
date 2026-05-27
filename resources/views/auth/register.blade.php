<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>F1 Standings - Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main class="form-section">
        
        <h2>Create Account</h2>

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
            @csrf

            <p>Name:</p>
            <input type="text" name="name" value="{{ old('name') }}" required>

            <p>Email:</p>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <p>Password:</p>
            <input type="password" name="password" required>

            <p>Confirm Password:</p>
            <input type="password" name="password_confirmation" required>

            <br><br>
            
            <button type="submit">Register</button>
            <a href="/" class="btn-table">Cancel</a>
        </form>

    </main>

</body>
</html>