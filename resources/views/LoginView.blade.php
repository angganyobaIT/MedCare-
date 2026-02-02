<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedCare+ | Login</title>
</head>
<body>
    <h1>Welcome Back</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('error'))
        <div style="color: orange; font-weight: bold;">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ url('/login/proccess') }}" method="POST" autocomplete="off">
        @csrf
        <input type="text" name='username_log' value='{{ old('username_log') }}' placeholder="Username" required>
        
        <input type="password" name='password_log' placeholder="Password" required autocomplete="current-password">
        
        <button type='submit'>Login</button>
    </form>

    <a href="{{ url('/') }}">Belum punya akun? Register</a>
</body>
</html>