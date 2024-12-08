<!-- resources/views/emails/otp.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Email Verification OTP</title>
</head>
<body>
    <h2>Email Verification</h2>
    <p>Your OTP for email verification is: <strong>{{ $otp }}</strong></p>
    <p>This OTP will expire in 5 minutes.</p>
    <p>If you didn't request this verification, please ignore this email.</p>
</body>
</html>



















