<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registracija</title>
</head>
<body>
<h1>Registracija</h1>

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

<form method="POST" action="{{ route('register.store') }}">
    @csrf

    <div>
        <label>Ime</label>
        <input name="name" value="{{ old('name') }}" required>
    </div>

    <div>
        <label>Email</label>
        <input name="email" type="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label>Password</label>
        <input name="password" type="password" required>
    </div>

    <div>
        <label>Potvrdi password</label>
        <input name="password_confirmation" type="password" required>
    </div>

    <button type="submit">Napravi account</button>
</form>

<p>Već imas akaunt? <a href="{{ route('login') }}">Login</a></p>
</body>
</html>