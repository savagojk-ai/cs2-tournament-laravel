<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>

@if (session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('login.store') }}">
    @csrf

    <div>
        <label>Email</label>
        <input name="email" type="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label>Password</label>
        <input name="password" type="password" required>
    </div>

    <button type="submit">Login</button>
</form>

<p>Nemas akaunt? <a href="{{ route('register') }}">Registracija</a></p>
</body>
</html>