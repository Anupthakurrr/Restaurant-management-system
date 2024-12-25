<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}!</h1>
    <p>Thank you for registering! Please verify your email address by clicking the link below:</p>
    <p>
        <a href="{{ $user->verificationUrl() }}">Verify Email Address</a>
    </p>
    <p>If you didn't create an account, no further action is required.</p>
</body>
</html>