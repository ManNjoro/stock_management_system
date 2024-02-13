<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <title>Login</title>
</head>
<body >
    <div class="form-container">
        <h1>Sign in to your account</h1>
        <form action="/login/authenticate" method="post" class="form">
            @csrf
            <input type="text" name="name" id="username" placeholder="username">
            <input type="password" name="password" id="password" placeholder="password">
            <button type="submit">Login</button>
            <a href="/register"><p className="account">Don't have an account? Register</p></a>
        </form>
    </div>
</body>
</html>