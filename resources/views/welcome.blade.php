<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    @if(!empty($user))
        <p>Welcome, <strong>{{ $user['username'] }}</strong>!</p>
        <p>Your email: <strong>{{ $user['email'] }}</strong></p>
    @else
        <p>No user data found. Please log in again.</p>
    @endif
    <a href="{{ route('login.form') }}">Go Back to Login</a>
</body>
</html>
