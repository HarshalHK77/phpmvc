<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="{{ old('username') }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
