<!DOCTYPE html>
<html>
<head>
    <title>New Student Enquiry</title>
</head>
<body>
    <h2>New Student Enquiry</h2>
    <p><strong>Name:</strong> {{ $enquiry['name'] }}</p>
    <p><strong>Email:</strong> {{ $enquiry['email'] }}</p>
    <p><strong>Phone:</strong> {{ $enquiry['phone'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $enquiry['message'] }}</p>
    <p>Thank you</p>
</body>
</html>
