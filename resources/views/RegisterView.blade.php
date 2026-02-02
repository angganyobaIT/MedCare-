<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedCare+ | Register</title>
</head>
<body>
    <h1>Create Account</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('register/proccess') }}" method="POST">
        @csrf
        
        <input type="text" name='username_reg' value="{{ old('username_reg') }}" placeholder="Username" required >
        <br>
        <input type="email" name='email_reg' value="{{ old('email_reg') }}" placeholder="Email" required >
        <br>
        <input type="text" name='telephone_reg' value="{{ old('telephone_reg') }}" placeholder="Telephone" required>
        <br>
        <input type="password" name='password_reg' placeholder="Password" required>
        <br>
        <input type="password" name='password_confirm_reg' placeholder="Confirm Password" required>
        <br>
        
        <button type="submit">Register</button>   
    </form>

    <a href="{{ url('login') }}">Sudah Punya Akun?</a>
</body>
</html>