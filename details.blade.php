<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    
        <p><strong>Username:</strong> {{ $user['username'] }}</p>
        <p><strong>Email:</strong> {{ $user['email'] }}</p>
    
        <p>No user data available.</p>
    <a href="{{ route('register.form') }}">Go Back to Register</a>
</body>
</html>
