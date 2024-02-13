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
        <h1>Create a new account</h1>
        <form action="/register/new" method="post" class="form">
            @csrf
            <input type="text" name="name" id="username" placeholder="username">
            <input type="email" name="email" id="email" placeholder="Email address">
            <input type="password" name="password" id="password" placeholder="password">
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password">
            <button type="submit">Register</button>
            <a href="/login"><p className="account">Don't have an account? Login</p></a>
        </form>
    </div>
</body>
</html>