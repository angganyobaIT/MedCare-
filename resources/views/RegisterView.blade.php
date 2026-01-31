<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MedCare+</title>
</head>
<body>
    <h1>
        Create Account
    </h1>
    <form action="register/proccess" method="POST">
        <input type="text" placeholder="Username" required >
        <input type="email" placeholder="Email" required >
        <input type="password" placeholder="Password" required autocomplete="new-password">
        <input type="password" placeholder="Confirm Password" required autocomplete="new-password">
        <button type="submit">Register</button>   
    </form>
    <a href="{{url('login')}}">Sudah Punya Akun?</a>
</body>
</html>