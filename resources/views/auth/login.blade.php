<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>F1 Standings - Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <main class="form-section">
        
        <h2>Sign In</h2>

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
            @csrf

            <p>Email:</p>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <p>Password:</p>
            <input type="password" name="password" required>

            <br><br>
            
            <button type="submit">Login</button>
            <a href="/" class="btn-table">Cancel</a>
        </form>
        
    </main>

</body>
</html>