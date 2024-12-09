<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="{{ route('register.submit') }}">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="{{ old('username') }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
